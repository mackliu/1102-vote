<?php
$id=$_GET['id'];
$subject=find('topics',$id);

$options=all('options',['topic_id'=>$id]);

?>

<h1><?=$subject['topic'];?></h1>
<ol>
<?php
foreach ($options as $key => $opt) {
    echo "<li>";
    echo $opt['opt'];

    echo "</li>";
}
?>
</ol>