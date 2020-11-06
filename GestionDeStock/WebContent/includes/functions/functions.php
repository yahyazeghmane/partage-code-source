<?php 

    /*
    ** Title Function v1.0
    ** Title Function That Echo The PageTitle In Case The Page
    ** Has The Variable $pageTitle And Echo Default Title For Other Pages
    */

function getTitle(){
    global $pageTitle;
    if (isset($pageTitle))
    {
        echo $pageTitle;
    }else {
        echo "Default";
    }
}




/*
** Home Redirect : Function v2.0
** Redirect Function { This Function Accept Paramaters}
**$theMsg = Echo The Message [ Error | Success | Warning]
**$url = The Link You Want To Redirect To
**$seconds = Seconds Before Redirecting
*/


function redirectHome($theMsg, $url=null, $seconds = 3){

    if($url === null){
        $url = 'index.php';
        $link = 'Homepage';
    }else {
        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){
            
            $url = $_SERVER['HTTP_REFERER'];
            $link = "Previous Page";

        }else {
            $url = 'index.php';
            $link = "Homepage";
        }
    }

    echo $theMsg;
    echo "<div class='alert alert-info'>Vous serez rediriger vers $link aprés $seconds.</div>";

    header("Refresh: $seconds;url=$url");
    exit();
}



/*
** Check Items Function v1.0
** Function To Check Item In Database | Function Accept Parameters
** $select = The Item To Select [ Example : user, item, category ]
** $from = The Table To Select From [ Example : users, items, categories]
** $value = The Value Of Select [ Example :]
*/

function checkItem($select, $from, $value){
    global $con;
    $statement = $con->prepare("SELECT $select From $from WHERE $select = ?");
    $statement->execute(array($value));
    $count = $statement->rowCount();
    return $count;
}





/*
**Count Number Of Items Function v1.0
**Function to Count Number Of Items Rows
** $item = The Item To Count
** $table = The Table To Choose From
**/

function countItems($item, $table){
    global $con;

    $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");

    $stmt2->execute();

    return $stmt2->fetchColumn();
}




/*
**GEt Latest Records Function v1.0
**Function To Get Latest Items From Database [ Users, Items, Comments]
** $select = Field To Select
** $table = The Table To Choose From
**
**/



function getLatest($select, $table, $order, $limit = 5){
    global $con;

    $getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");

    $getStmt->execute();

    $rows = $getStmt->fetchAll();

    return $rows;
}



