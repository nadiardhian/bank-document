<?php
    include "template/connect.php";
    if(isset($_POST['upload'])){
        $allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name		= $_FILES['file']['name'];
        $temp			= explode('.', $file_name);
        $file_ext		= strtolower(end($temp));
        $file_size		= $_FILES['file']['size'];
        $file_tmp		= $_FILES['file']['tmp_name'];

        $nama			= $_POST['nama'];
        $category       	= $_POST['category'];
        $tgl			= date("Y-m-d");

        if(in_array($file_ext, $allowed_ext) === true){
                if($file_size < 30440700){
                        $lokasi = 'files/'.$nama.'.'.$file_ext;
                        $names = $nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);
                        $in = mysqli_query($connect,"INSERT INTO download VALUES(NULL, '$tgl', '$nama','$category', '$file_ext', '$file_size', '$names','0')");
                        if($in){
                        ?>
                            <script language='javascript'>
                                alert("Upload Success");
                                document.location='department.php';
                            </script>
                        <?php
                         }else{
                        ?>
                            <script language='javascript'>
                                alert("ERROR: Gagal Upload File!");
                                document.location='department.php';
                            </script>
                        <?php
                        }
                }else{
                    ?>
                        <script language='javascript'>
                            alert("ERROR: Besar ukuran file (file size) maksimal 1 Mb!");
                            document.location='department.php';
                        </script>
                    <?php
                }
        }else{
            ?>
                <script language='javascript'>
                    alert("ERROR: Ekstensi file tidak di izinkan!");
                    document.location='department.php';
                </script>
            <?php
        }
    

   }elseif (isset ($_POST['cancel'])) {
        header("Location: department.php");
}
?>