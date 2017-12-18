<?php

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        $pageTitle="Админпанель";
        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}