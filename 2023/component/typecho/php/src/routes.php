<?php

use Langnang\TypechoModule;

/**
 * @OA\Tag(
 *     name="Langnang\TypechoModule",
 *     description="Typecho",
 * )
 */
$router->addGroup("/" . basename(__DIR__), function (FastRoute\RouteCollector $router) {
  /**
   * 文章
   */
  $router->addGroup("/post", function (FastRoute\RouteCollector $router) {
    $db = parse_ini_file(__DIR__ . "/../../../.env", true)["typecho"];
    // var_dump($db);
    $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
    /**
     * @OA\POST (
     *     path="/module/langnang/typecho/post",
     *     tags={"Langnang\TypechoModule"},
     *     summary="新增单个文章",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property( property="title", type="string", description="标题", default="Air Gear", ),
     *                 @OA\Property( property="text", type="string", description="内容", default="Air Gear", ),
     *                 @OA\Property( property="categories", type="array", description="目录",
     *                   @OA\Items( type="string", default="test")
     *                 ),
     *                 @OA\Property( property="tags", type="array", description="标签",
     *                   @OA\Items( type="string", default = "test")
     *                 ),
     *                 @OA\Property( property="fields", type="object", description="自定义字段",
     *                    @OA\Property( property="art", type="string", description="作品名词", default="Air Gear", ),
     *                    @OA\Property( property="character", type="string", description="角色名", default="Air Gear", ),
     *                 ),
     *             ),
     *             @OA\Schema(
     *                 @OA\Property( property="title", type="string", description="标题", default="Air Gear", ),
     *                 @OA\Property( property="text", type="string", description="内容", default="Air Gear", ),
     *                 @OA\Property( property="categories", type="array", description="目录",
     *                   @OA\Items( type="string", default="test")
     *                 ),
     *                 @OA\Property( property="tags", type="array", description="标签",
     *                   @OA\Items( type="string", default = "test")
     *                 ),
     *                 @OA\Property( property="fields", type="object", description="自定义字段",
     *                    @OA\Property( property="art", type="string", description="作品名词", default="Air Gear", ),
     *                    @OA\Property( property="character", type="string", description="角色名", default="Air Gear", ),
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("POST", "", function ($data) {
      header('Content-Type: application/json');
      // var_dump($data["post"]);
      $db = parse_ini_file(__DIR__ . "/../../../.env", true)["typecho"];
      // var_dump($db);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      // $typecho = new TypechoModule($conn, $db);
      $result = TypechoModule::insert_post($conn, $data["post"], $db);

      __Module::__print($result);
    });
    /**
     * @OA\DELETE (
     *     path="/module/langnang/typecho/post/1",
     *     tags={"Langnang\TypechoModule"},
     *     summary="删除单个文章",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("DELETE", "/{cid:\d+}", function ($data) {
      header('Content-Type: application/json');
      // var_dump($data["post"]);
      $db = parse_ini_file(__DIR__ . "/../../../.env", true)["typecho"];
      // var_dump($db);
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      // $typecho = new TypechoModule($conn, $db);
      $result = TypechoModule::delete_post($conn, (int)$data["vars"]["cid"], $db,);

      __Module::__print($result);
    });
    /**
     * @OA\PUT (
     *     path="/module/langnang/typecho/post/1",
     *     tags={"Langnang\TypechoModule"},
     *     summary="更新单个文章",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("PUT", "/{id:\d+}", function ($data) {
    });
    /**
     * @OA\GET (
     *     path="/module/langnang/typecho/post",
     *     tags={"Langnang\TypechoModule"},
     *     summary="查询随机文章",
     *     @OA\Parameter( name="num", in="query", description="数量",
     *         @OA\Schema( type="int", default="1")
     *     ),
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "", function ($data) {
      header('Content-Type: application/json');
      $db = $data["env"]["typecho"];
      $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
      $result = TypechoModule::select_random_post($conn, $db, (int)(isset($data["get"]["num"]) ? $data["get"]["num"] : 1));
      __Module::__print($result);
    });
    /**
     * @OA\GET (
     *     path="/module/langnang/typecho/post/1",
     *     tags={"Langnang\TypechoModule"},
     *     summary="查询单个文章",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    $router->addRoute("GET", "/{id:\d+}", array(TypechoModule::class, 'print', "conn" => $conn, "db" => $db, "func" => "select_post"));
    // $router->addRoute("GET", "/{id:\d+}", function ($data) {
    //   header('Content-Type: application/json');
    //   $db = parse_ini_file(__DIR__ . "/../../../.env", true)["typecho"];
    //   $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
    //   $result = TypechoModule::select_post($conn, (int) $data["vars"]["id"], $db);
    //   __Module::__print($result);
    // });
  });
});
