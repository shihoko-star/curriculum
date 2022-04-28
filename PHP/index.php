<html>
 <p>I say that <?php echo "Hello world!!"; ?></P>
</html>

<?php 
echo "1.開発環境・検証環境・本番環境"."<br>";
echo "開発環境：機器やソフトウェア、システムを開発するために必要な機材やソフトウェアなどの組み合わせ。また、それらを組み合わせて構成された、開発者の作業環境。検証環境：開発環境で作られたシステムをテストするための工程で、誤記やリンクミスなどをチェックし、適宜修正する段階のこと。本番環境：情報システムやソフトウェアの開発で、できあがった製品を実際に稼働させて利用に供するための施設や機材、ソフトウェアなどを組み合わせた運用環境のこと。"."<br>";
echo "2.基本設計書・詳細設計書"."<br>";
echo "基本設計書：システム機能を具体化するために必要なもので、要件定義の内容を元に、どのような画面になるか、などを定めるもの。詳細設計書：基本設計の次段階に位置する工程です。基本設計は何を作るか（WHAT）を定めるのに対し、詳細設計ではどう作るか（HOW）を定める。"."<br>";
echo "3.Ajax"."<br>";
echo "Ajaxとは「Asynchronous JavaScript + XML」の略。"."<br>";
?>

<?php
$message = "Hello World!";

var_dump($message);
echo "<br>";
?>

<?php
$x = 8;
$y =5.55;
var_dump($x);
echo "<br>";
var_dump($y);
echo"<br>"
?>

<?php
$flag = true;
var_dump($flag);
echo"<br>"
?>

<?php
$emp = null;
var_dump($emp);
echo "<br>";
?>

<?php
$en_words = "Hello World";
var_dump($en_words);
echo "<br>";
$ja_words = "こんにちは"
var_dump($ja_words);
?>

//API:Application Programming Interfaceの略。ソフトウェアからOSの機能を利用するための仕様またはインターフェースの総称で、アプリケーションの開発を容易にするためのソフトウェア資源のことをいう.
SVN:オープンソースの集中型バージョン管理システム