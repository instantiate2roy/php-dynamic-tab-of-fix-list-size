<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $data = array(
            array("id" => 1, "title" => "Post One", "body" => "This is the post body", "created_at" => "2020-03-01 10=>51=>11", "updated_at" => "2020-03-01 10=>51=>11"),
            array("id" => 2, "title" => "Post two", "body" => "This is posr 2", "created_at" => "2020-03-01 10=>52=>55", "updated_at" => "2020-03-01 10=>52=>55"),
            array("id" => 3, "title" => "New Post", "body" => "This is the post body", "created_at" => "2020-03-01 15=>42=>54", "updated_at" => "2020-03-01 15=>42=>54"),
            array("id" => 4, "title" => "Post 4", "body" => "body for post  number 4", "created_at" => "2020-03-01 15=>43=>55", "updated_at" => "2020-03-01 15=>43=>55"),
            array("id" => 5, "title" => "Post 5", "body" => "body for post  number 5", "created_at" => "2020-03-01 15=>44=>11", "updated_at" => "2020-03-01 15=>44=>11"),
            array("id" => 6, "title" => "Post 6", "body" => "body for post  number 6", "created_at" => "2020-03-01 15=>44=>22", "updated_at" => "2020-03-01 15=>44=>22"),
            array("id" => 7, "title" => "Post 7", "body" => "body for post  number 7", "created_at" => "2020-03-01 15=>44=>40", "updated_at" => "2020-03-01 15=>44=>40"),
            array("id" => 8, "title" => "Post 8", "body" => "body for post  number 8", "created_at" => "2020-03-01 15=>44=>54", "updated_at" => "2020-03-01 15=>44=>54"),
            array("id" => 9, "title" => "Post 9", "body" => "body for post  number 9", "created_at" => "2020-03-01 15=>45=>08", "updated_at" => "2020-03-01 15=>45=>08"),
            array("id" => 10, "title" => "Post 10", "body" => "body for post  number 10", "created_at" => "2020-03-01 15=>45=>33", "updated_at" => "2020-03-01 15=>45=>33"),
            array("id" => 11, "title" => "Post 11", "body" => "body for post  number 11", "created_at" => "2020-03-01 15=>45=>46", "updated_at" => "2020-03-01 15=>45=>46"));

        $recordsPerTab = 2;
        echo gen_tabs($data, $recordsPerTab);

        function gen_tabs($data, $recordsPerTab) {
            $data_section = '<div class="tab-content">';
            $tab_section = '<ul class="nav nav-tabs">';
            $tabcounter = 1;
            $tab_section.= '<li class="active" style="padding:5px;"><a data-toggle="tab" href="#menu' . $tabcounter . '">Menu ' . $tabcounter . '</a></li>';
            $data_section.='<div id="menu' . $tabcounter . '" class="tab-pane fade in active">';
            $tabCountInterval = 0;
            foreach ($data as $record) {
                if ($tabCountInterval == $recordsPerTab) {
                    $tabcounter++;
                    $data_section.='</div>';
                    $data_section.='<div id="menu' . $tabcounter . '" class="tab-pane fade">';
                    $tab_section.= '<li style="padding:5px;"><a data-toggle="tab" href="#menu' . $tabcounter . '">Menu ' . $tabcounter . '</a></li>';
                    $tabCountInterval = 0;
                }
                $data_section.='<li class="list-group-item">
                                <h3><a href="">' . $record['title'] . '</a></h3>
                                <small>Written on ' . $record['created_at'] . '</small>
                            </li>';
                $tabCountInterval++;
            }
            $tab_section . '</ul>';
            $data_section.='</div></div>';
            $html = $tab_section . "</br></br>" . $data_section;
            return $html;
        }
        ?>
    </body>
</html>
