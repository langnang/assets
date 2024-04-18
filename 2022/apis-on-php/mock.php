<?php

/**
 * @OA\Tag(
 *     name="mock",
 *     description="Mock Data",
 * )
 */

use Langnang\TypechoModule;

$router->addGroup("/mock", function (FastRoute\RouteCollector $router) {
  /**
   * @OA\Get (
   *     path="/mock/typecho",
   *     tags={"mock"},
   *     summary="模拟插入Typecho数据",
   *     @OA\Response(response=200, description="Success")
   * )
   */
  $router->addRoute("GET", "/typecho", function ($data) {
    $faker = Faker\Factory::create();
    header('Content-Type: application/json');
    $db = array_merge($data["route_env"]["typecho"], array("prefix" => "typecho_mock_"));
    $conn = \Doctrine\DBAL\DriverManager::getConnection($db);
    $num = $faker->randomNumber(3, false);
    $data = array();
    for ($i = 0; $i <= $num - 1; $i++) {
      array_push($data, array(
        "title" => $faker->sentence(),
        "text" => $faker->paragraph(),
        "tags" => $faker->words(),
        "fields" => [
          "name" => $faker->name(),
          "email" => $faker->email(),
          "address" => $faker->address(),
        ],
        "categories" => []
      ));
    }
    $result = TypechoModule::insert_posts($conn, $data, $db);
    echo json_encode([
      "status" => 200,
      "statusText" => "Success",
      "data" =>  $result,
    ], JSON_UNESCAPED_UNICODE);
  });
});
