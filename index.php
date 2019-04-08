<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Quiz</title>
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <div class="row">
        <div class="col ml-3">
            <?php
    $questions = array(
        '1' => array(
                                'Where are located penguins?' => array(
                                'North Pole',
                                'South Africa',
                                'England',
                                'Moon'
                            )
        ),
        '2' => array(
                                'How do you find a street?' => array(
                                'Google Maps',
                                'Ask someone',
                                'Pay a detective',
                                'Sit in a chair an try to rememeber location'
                            )   
        ),
        '3' => array(
                                'Is it possible to link within the current page ?' => array(
                                'Only in framesets',
                                'Yes',
                                'No',
                                'Null'
                            )   
        ),
        '4' => array(
                                'Which section is used for text and tags that are shown directly on your web page ?' => array(
                                'Head',
                                'Metatags',
                                'Body',
                                'None'
                            )
        ),
        '5' => array(
                                'Why should you add alternative text to your images ?' => array(
                                'In case the user wishes to load a different picture',
                                'So the users can get an idea of what the image is before it loads',
                                'So the user can save the image using the text as a name',
                                'None'
                            )   
        ),
        '6' => array(
                                'What is used to store information usually relevant to browsers and searchengines?' => array(
                                'Cookies',
                                'Metatags',
                                'Tabs',
                                'None'
                            )   
        ),
        '7' => array(
                                'Why should you specify a background color if you are using an image for the actual background of your page ?' => array(
                                'The background color will be shown until the image loads',
                                'In case the image doesnt fit right',
                                'So the text shows up better',
                                'None'
                            )   
        ),
        '8' => array(
                                'What tag tells the browser where the page starts and stops ?' => array(
                                ' < body >',
                                '< head >',
                                '< html >',
                                'None'
                            )
        ),
        '9' => array(
                                'One should never combine the "start" and "type" option ?' => array(
                                'True',
                                'False',
                                'Sometimes True, sometimes False',
                                'None'
                            )   
        ),
        '10' => array(
                                'Adding a border to your image helps the visitor to recognize it as what ?' => array(
                                'A Link',
                                'A really great picture',
                                'A frame',
                                'None'
                            )   
        )                                                                                                       
    );
    shuffle($questions); 
    foreach ($questions as $qkey => $qvalue) {
        foreach ($qvalue as $ekey => $evalue) {
            print '<h3>'.$ekey.':</h3>';
            foreach ($evalue as $akey => $avalue) {
                $c[] = $avalue;
            }
            $rand_keys = array_rand($c, 4);
            shuffle($rand_keys); ?>
            <div class="row">
            <div class="col-sm-12 ml-3">
            <form action='index.php' method='post'>
                <input type='radio' name='name<?php echo $qkey; ?>'><?php echo $c[$rand_keys[0]] ?><br><br>
                <input type='radio' name='name<?php echo $qkey; ?>'><?php echo $c[$rand_keys[1]] ?><br><br>
                <input type='radio' name='name<?php echo $qkey; ?>'><?php echo $c[$rand_keys[2]] ?><br><br>
                <input type='radio' name='name<?php echo $qkey; ?>'><?php echo $c[$rand_keys[3]] ?><br><br>
                <?php unset($c);}}?>
                <br><br>
                <input type="submit">
            </form>
            </div>
            </div>
        </div>
    </div>
</body>

</html>