$("#spinner").hide();
        app.controller('Contact', function($rootScope, $controller, $http, $window, $document, $scope, $q) {
            $scope.inputs = {
                fname: "",
                lname: "",
                email: "",
                phone: "",
                website: "",
                message: "",
                csrf: "<?=$user->token()?>"
            };
            $scope.errors = [];
            $scope.submitContact = () => {
                $("#spinner").css("display", "flex");
                $http({
                    method  : 'POST',
                    url     : '/library/mail.php', 
                    data    : $.param($scope.inputs),
                    dataType: 'json',
                    headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
                }).then(function successCallback(response) {
                    $("#spinner").hide();
                    if (response.status === 404) {
                        $("#usr_msg").css("display", "flex");
                    }
                    if (response.data) {
                        response = response.data;
                        if (response.csrf) {
                            $scope.inputs.csrf = response.csrf;
                        }
                        if (response.error) {
                            $("#usr_msg").html(response.error + "<div class='close'>X</div>");
                            $("#usr_msg").css("display", "flex");
                        } else if (response.result === true) {
                            $("#usr_msg").addClass("success");
                            $("#usr_msg").html("Your message has been sent! <div class='close'>X</div>");
                            $("#usr_msg").css("display", "flex");
                        } else {
                            $("#usr_msg").css("display", "flex");
                        }
                    }
                    $(".close").click(function() {
                        $("#usr_msg").hide();
                    });
                },
                function errorCallback(response) {
                    $("#spinner").hide();
                    $("#usr_msg").css("display", "flex");
                    $(".close").click(function() {
                        $("#usr_msg").hide();
                    });
                });
            }
        });	
        // $("#close").click(function() {
        //     $("#usr_msg").hide();
        // });