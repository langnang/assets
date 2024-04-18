<?php

use Hitokoto\V1Module;
use IXiaoWai\TgrjModule;
use IXiaoWai\YlModule as IXiaoWaiYlModule;
use Langnang\TypechoModule;
use Oddfar\YlModule;
use Vercel\AnimechanModule;

/**
 * @OA\Tag(
 *     name="quote",
 *     description="Langnang's Typecho for Quotes",
 *     @OA\ExternalDocumentation(
 *         description="Typecho",
 *         url="http://quote.langnang-typecho.ml"
 *     )
 * )
 */
$router->addGroup("/quote", function (FastRoute\RouteCollector $router) {
  $prefix = "typecho_quote_";
  /**
   * @OA\Get (
   *     path="/quote",
   *     tags={"quote"},
   *     summary="查询随机语录",
   *     @OA\Parameter( name="num", in="query", description="数量",
   *         @OA\Schema( type="int", default="1")
   *     ),
   *     @OA\Response(response=200, description="Success")
   * )
   */
  $router->addRoute("GET", "", function ($data) {
    header('Content-Type: application/json');
    $env = parse_ini_file(__DIR__ . "/../.env", true);
    $db = array_merge($env["typecho"], array("prefix" => "typecho_quote_"));
    $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
    $result = TypechoModule::select_random_post($conn, $db, (int)(isset($data["get"]["num"]) ? $data["get"]["num"] : 1));
    __Module::__print($result);
  });
  $router->addGroup("/crawler", function (FastRoute\RouteCollector $router) {
    /**
     * @OA\Get (
     *     path="/quote/crawler/animechan",
     *     tags={"quote"},
     *     summary="抓取动漫语录并存入数据库",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "/animechan", function ($data) {
      header('Content-Type: application/json');
      $env = parse_ini_file(__DIR__ . "/../.env", true);
      $db = array_merge($env["typecho"], array("prefix" => "typecho_quote_"));
      // $db = array_merge($_env["typecho"], isset($_env["typecho_quote"]) ? $_env["typecho_quote"] : array());
      // var_dump(json_decode($response->body, true));
      $quote = AnimechanModule::quotes($data);
      // var_dump($quote);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      // // $typecho = new TypechoModule($conn, $db);
      $result = TypechoModule::insert_posts($conn, array_map(function ($quote) {
        return array(
          "title" => $quote["quote"],
          "text" => $quote["quote"],
          "tags" => ["动漫", "anime"],
          "fields" => [
            "art" => $quote["anime"],
            "character" => $quote["character"]
          ]
        );
      }, $quote), $db);
      echo json_encode([
        "status" => 200,
        "statusText" => "Success",
        "data" =>  $result,
      ], JSON_UNESCAPED_UNICODE);
    });
    /**
     * @OA\Get (
     *     path="/quote/crawler/hitokoto",
     *     tags={"quote"},
     *     summary="抓取语录并存入数据库",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "/hitokoto", function ($data) {
      header('Content-Type: application/json');
      $env = parse_ini_file(__DIR__ . "/../.env", true);
      $db = array_merge($env["typecho"], array("prefix" => "typecho_quote_"));
      $quote = V1Module::random($data);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      $result = TypechoModule::insert_post($conn, array(
        "title" => $quote["hitokoto"],
        "text" => $quote["hitokoto"],
        "tags" => [$quote["type"]],
        "fields" => [
          "art" => $quote["from"],
          "character" => $quote["from_who"]
        ]
      ), $db);
      echo json_encode([
        "status" => 200,
        "statusText" => "Success",
        "data" =>  $result,
      ], JSON_UNESCAPED_UNICODE);
    });
    /**
     * @OA\Get (
     *     path="/quote/crawler/oddfar",
     *     tags={"quote"},
     *     summary="抓取语录并存入数据库",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "/oddfar", function ($data) {
      header('Content-Type: application/json');
      $env = parse_ini_file(__DIR__ . "/../.env", true);
      $db = array_merge($env["typecho"], array("prefix" => "typecho_quote_"));
      $quote = YlModule::random($data);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      $result = TypechoModule::insert_post($conn, array(
        "title" => $quote["text"],
        "text" => $quote["text"],
        "tags" => [$quote["type"]],
      ), $db);
      echo json_encode([
        "status" => 200,
        "statusText" => "Success",
        "data" =>  $result,
      ], JSON_UNESCAPED_UNICODE);
    });
    /**
     * @OA\Get (
     *     path="/quote/crawler/ixiaowai-yl",
     *     tags={"quote"},
     *     summary="抓取语录并存入数据库",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "/ixiaowai-yl", function ($data) {
      header('Content-Type: application/json');
      $env = parse_ini_file(__DIR__ . "/../.env", true);
      $db = array_merge($env["typecho"], array("prefix" => "typecho_quote_"));
      $quote = IXiaoWaiYlModule::random($data);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      $result = TypechoModule::insert_post($conn, array(
        "title" => $quote["msg"],
        "text" => $quote["msg"],
      ), $db);
      echo json_encode([
        "status" => 200,
        "statusText" => "Success",
        "data" =>  $result,
      ], JSON_UNESCAPED_UNICODE);
    });
    /**
     * @OA\Get (
     *     path="/quote/crawler/ixiaowai-tgrj",
     *     tags={"quote"},
     *     summary="抓取语录并存入数据库",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "/ixiaowai-tgrj", function ($data) {
      header('Content-Type: application/json');
      $env = parse_ini_file(__DIR__ . "/../.env", true);
      $db = array_merge($env["typecho"], array("prefix" => "typecho_quote_"));
      $quote = TgrjModule::random($data);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      $result = TypechoModule::insert_post($conn, array(
        "title" => $quote["msg"],
        "text" => $quote["msg"],
        "tags" => [$quote["type"]],
      ), $db);
      echo json_encode([
        "status" => 200,
        "statusText" => "Success",
        "data" =>  $result,
      ], JSON_UNESCAPED_UNICODE);
    });
  });
});
