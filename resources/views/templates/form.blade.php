<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <title>Form</title>
    <style type="text/css">
        .panel{
            margin-bottom: 10px;
        }
        .panel-body{
            padding: 5px;
            border: 1px solid transparent;
        }
        .panel-heading{
            padding: 5px;
        }
        #creatRequest{
            margin: 15px;
            background-color: #23527c;
            color: #FFFFFF;
        }
        #creatRequest:hover{
            color: deeppink;
        }
        .glyphicon{
            padding: 5px;
        }
    </style>
</head>
    <div class ="container-fluid">
        <div class ='col-sm-3' id= 'menu' style="background-color:#98cbe8 ">
            <div class="panel-title">Request IT</div>
            <div class="row"><button class ='btn col-sm-offset-1' id="creatRequest">+ THÊM YÊU CẦU</button></div>

                <div class="panel panel-default">
                    <div id = "menuHeading1" class="panel-heading" data-toggle="collapse" data-target ="#panelMenu1" onclick="open_close('#menuHeading1')">
                        <label>Việc tôi yêu cầu</label>
                        <span  class ="pull-right glyphicon glyphicon-minus"></span>
                    </div>
                    <div class="panel-collapse collapse in" id = "panelMenu1">
                        <div class="panel-body" id ="allRequest" onclick = "display()">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span>All</span>
                        </div>
                        <div class="panel-body" id ="newRequest" onclick="">
                            <span class = "glyphicon glyphicon-envelope"></span>
                            <span>New</span>
                        </div>
                        <div class="panel-body" id="inprogressRequest">
                            <span class=" glyphicon glyphicon-import"></span>
                            <span>Inprogress</span>
                        </div>
                        <div class="panel-body" id ="resolvedRequest">
                            <span class=" glyphicon glyphicon-registration-mark"></span>
                            <span>Resolved</span>
                        </div>
                        <div class="panel-body" id="OutOfDateRequest">
                            <span class=" glyphicon glyphicon-calendar"></span>
                            <span>Out Of Date</span>
                        </div>
                    </div>
                </div>
            <!-- relatedWork : cong viec lien quan -->
            <div class="panel panel-default">
                <div id = "menuHeading2" class="panel-heading" data-toggle="collapse" data-target ="#panelMenu2" onclick="open_close('#menuHeading2')">
                    <label>Công việc liên quan</label>
                    <span  class ="pull-right glyphicon glyphicon-minus"></span>
                </div>
                <div class="panel-collapse collapse in" id = "panelMenu2">
                    <div class="panel-body" id ="allRelatedWork" onclick = "display()">
                        <span class=" glyphicon glyphicon-list-alt"></span>
                        <span>All</span>
                    </div>
                    <div class="panel-body" id ="newRelatedWork" onclick="">
                        <span class = "glyphicon glyphicon-envelope"></span>
                        <span>New</span>
                    </div>
                    <div class="panel-body" id="inprogressRelatedWork">
                        <span class=" glyphicon glyphicon-import"></span>
                        <span>Inprogress</span>
                    </div>
                    <div class="panel-body" id ="resolvedRelatedWork">
                        <span class=" glyphicon glyphicon-registration-mark"></span>
                        <span>Resolved</span>
                    </div>
                    <div class="panel-body" id="OutOfDateRelatedWork">
                        <span class=" glyphicon glyphicon-calendar"></span>
                        <span>Out Of Date</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>
        <div class="col-sm-9" style=""></div>
    </div>
    <script type="text/javascript">
        function display() {
            document.write("adfdfd");
        }
        function open_close(id){
            var imgChild = $(id).children("span");
            var str = imgChild.attr("class");
            if(str.search("glyphicon-minus") != -1){
                str = str.replace('glyphicon-minus','glyphicon-plus');
                // document.write(str);
                imgChild.attr("class",str);
            }
            else{
                str = str.replace('glyphicon-plus','glyphicon-minus');
                imgChild.attr("class",str);
            }
        }
    </script>
    <script type="text/javascript" src="Css/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
