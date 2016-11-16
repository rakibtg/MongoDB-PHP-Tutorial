<?php
    require_once( './MongodbDatabase.php' );

    $db = new MongodbDatabase;
    // Test insert new data.
    // print_r($db->insertNewItem([
    //     'videoTitle' => 'a test video',
    //     'videoLink' => 'blahblabha',
    //     'videoID' => 'afc265cs42c',
    //     'videoArtist' => 'Its me :D'
    // ]));
    // exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MongoDB Tutorial.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <?php
        // Check if we have data to insert informations about videos to mongodb database.
        if( isset( $_POST['videoTitle'] ) ) {
            if( ! empty( $_POST['videoTitle'] ) ) {
                $insertable = $db->insertNewItem([
                    'videoTitle' => $_POST['videoTitle'],
                    'videoLink' => $_POST['videoLink'],
                    'videoID' => $_POST['videoID'],
                    'videoArtist' => $_POST['videoArtist']
                ]);
                if( $insertable ) {
                    ?>
                    <div class="container">
                        <div class="panel">
                            <h3>New video has inserted.</h3>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    ?>
    
    <div class="container">
        <div class="col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Add a video</b>
                </div>
                <div class="panel-body">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="videoTitle" id="" class="form-control" placeholder='Video Title'>
                        </div>
                        <div class="form-group">
                            <input type="text" name="videoLink" id="" class="form-control" placeholder='Video Link'>
                        </div>
                        <div class="form-group">
                            <input type="text" name="videoId" id="" class="form-control" placeholder='Video Id'>
                        </div>
                        <div class="form-group">
                            <input type="text" name="videoArtist" id="" class="form-control" placeholder='Video Artist'>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add Video" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-sm-6"></div>
    </div>

</body>
</html>
