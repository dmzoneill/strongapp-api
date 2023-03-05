use strict;
use warnings;
use LWP::UserAgent;
use HTTP::Request::Common qw(POST GET);
use JSON;
use Data::Dump qw(dump);

package Strong;

sub new {
    my $class = shift;
    my $self = {
        endpoint => "https://ws13.strongapp.co",
        strong_username => $ENV{strong_username},
        strong_password => $ENV{strong_password},
        strong_device_uuid => $ENV{strong_device_uuid},
        strong_application_id => $ENV{strong_application_id},
        debug => 0,
        headers => {
            Host => 'ws13.strongapp.co',
            'x-parse-application-id' => $ENV{strong_application_id},
            'x-parse-app-build-version' => '257',
            'x-parse-app-display-version' => '2.7.9',
            'x-parse-os-version' => '13',
            'user-agent' => 'Parse Android SDK API Level 33',
            'x-parse-installation-id' => $ENV{strong_device_uuid},
            'content-type' => 'application/json',
            pragma => 'no-cache',
            'cache-control' => 'no-cache'
        }
    };
    if (!defined $self->{strong_username}) {
        print "Missing: strong_username\n";
        exit(1);
    }
    if (!defined $self->{strong_password}) {
        print "Missing: strong_password\n";
        exit(2);
    }
    if (!defined $self->{strong_device_uuid}) {
        print "Missing: strong_device_uuid\n";
        exit(3);
    }
    if (!defined $self->{strong_application_id}) {
        print "Missing: strong_application_id\n";
        exit(4);
    }
    bless $self, $class;
    return $self;
}

sub WebRequest {
    my ($self, $method, $query, $data) = @_;
    my $ua = LWP::UserAgent->new;
    my $url = $self->{endpoint} . $query;
    my $req;
    if ($method eq "POST") {
        $req = POST($url, Content_Type => 'application/json', Content => encode_json($data), %{$self->{headers}});
    } else {
        $req = GET($url, %{$self->{headers}});
    }
    my $res = $ua->request($req);
    if ($self->{debug}) {
        print dump($req->as_string);
        print dump($res->as_string);
        print $res->status_line, "\n";
        print $res->content, "\n";
    }
    if ($res->is_success) {
        return 1;
    }
    return 0;
}

sub Login {
    my $self = shift;
    my $data = {
        username => $self->{strong_username},
        password => $self->{strong_password},
        _method => "GET"
    };
    my $res = $self->WebRequest("POST", "/parse/login", $data);
    my $js = decode_json($res->content);
    $self->{session_token} = $js->{sessionToken};
    $self->{user_object_id} = $js->{objectId};
    $self->{headers}->{'x-parse-session-token'} = $self->{session_token};
    return $res->is_success;
}

sub GetUser {
    my $self = shift;
    eval {
        my $res = $self->WebRequest("GET", "/parse/classes/_User/" . $self->{user_object_id});
        return $res;
    } or do {
        my $e = $@;
        print "$e";
        return 0;
    };
}

sub GetWorkouts {
    my $self = shift;
    eval {
        my %where = (
            user => {
                __type => "Pointer",
                className => "_User",
                objectId => $self->{user_object_id}
            },
            updatedAt => {
                '$gt' => {
                    __type => "Date",
                    iso => "1970-01-01T00:00:00.000Z"
                }
            }
        );
        my %data = (
            include => "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise",
            limit => "200",
            where => encode_json(\%where),
            _method => "GET"
        );
        my $res = $self->WebRequest("POST", "/parse/classes/ParseWorkout", \%data);
        return $res;
    } or do {
        my $e = $@;
        print "$e";
        return 0;
    };
}

sub GetWorkOutsPerWeek {
    my $self = shift;
    eval {
        my %where = (
            user => {
                __type => "Pointer",
                className => "_User",
                objectId => $self->{user_object_id}
            }
        );
        my %data = (
            _method => "GET",
            where => encode_json(\%where)
        );
        my $res = $self->WebRequest("POST", "/parse/classes/ParseWidget", \%data);
        return $res;
    } or do {
        my $e = $@;
        print "$e";
        return 0;
    };
}


sub GetWorkOutsCount {
    my $self = shift;
    my $where = {
        user => {
            __type => "Pointer",
            className => "_User",
            objectId => $self->{user_object_id}
        },
        updatedAt => {
            '$gt' => {
                __type => "Date",
                iso => "1970-01-01T00:00:00.000Z"
            }
        }
    };

    my $data = {
        include => "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise",
        limit => 0,
        count => 1,
        where => JSON::encode_json($where)
    };

    my $res = $self->WebRequest("POST", "/parse/classes/ParseWorkout", $data);
    return $res;
}

sub GetJSON {
    my $self = shift;
    return $self->{response}->json();
}

sub GetText {
    my $self = shift;
    return $self->{response}->text();
}

sub SaveResponseToFile {
    my ($self, $filename) = @_;
    eval {
        open(my $save_file, ">", $filename) or die "Cannot open file $filename: $!";
        print $save_file $self->{response}->text();
        close($save_file);
        return 1;
    } or do {
        my $error = $@ || "Unknown error";
        print "$error\n";
        return 0;
    };
}

1;