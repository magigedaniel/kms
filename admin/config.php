<?php
        $page_name = $_POST['page_name'];
        $page_label = $_POST['page_label'];
        $content = $_POST['content'];          

                $conn  = mysqli_connect("localhost", "root", "", "ken");

                if ($conn ->connect_error){
                    echo "DB connection error";
                        # code...
                        //die('connection error :'.$conn->connect_error);
                }else{
                        $data = $conn -> prepare("insert into pages(page_name,page_label, content) values (?,?,?)");
                        $data -> bind_param("sss", $page_name, $page_label, $content);
                        $data -> execute();
                        echo "Message sent successfully";
                        header("location: ./response.html");
                        $data ->close();
                        $conn ->close();
                }
?>