<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "icon" => "fa-bar-chart",
                    "order" => 1,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "儀表板",
                    "uri" => "/"
                ],
                [
                    "icon" => "fa-tasks",
                    "order" => 13,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "管理面板",
                    "uri" => NULL
                ],
                [
                    "icon" => "fa-users",
                    "order" => 14,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "角色",
                    "uri" => "auth/users"
                ],
                [
                    "icon" => "fa-user",
                    "order" => 15,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "角色",
                    "uri" => "auth/roles"
                ],
                [
                    "icon" => "fa-ban",
                    "order" => 16,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "權限",
                    "uri" => "auth/permissions"
                ],
                [
                    "icon" => "fa-bars",
                    "order" => 17,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "選單",
                    "uri" => "auth/menu"
                ],
                [
                    "icon" => "fa-history",
                    "order" => 18,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "日誌",
                    "uri" => "auth/logs"
                ],
                [
                    "icon" => "fa-desktop",
                    "order" => 3,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "廣告橫幅",
                    "uri" => "/banners"
                ],
                [
                    "icon" => "fa-bullseye",
                    "order" => 4,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "最新活動",
                    "uri" => "/activitys"
                ],
                [
                    "icon" => "fa-newspaper-o",
                    "order" => 5,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "最新消息",
                    "uri" => "/infos"
                ],
                [
                    "icon" => "fa-cloud",
                    "order" => 6,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "媒體管理",
                    "uri" => "/media"
                ],
                [
                    "icon" => "fa-briefcase",
                    "order" => 7,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "網站設置",
                    "uri" => "/config"
                ],
                [
                    "icon" => "fa-gears",
                    "order" => 8,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "工具面板",
                    "uri" => NULL
                ],
                [
                    "icon" => "fa-keyboard-o",
                    "order" => 9,
                    "parent_id" => 13,
                    "permission" => NULL,
                    "title" => "腳手架",
                    "uri" => "helpers/scaffold"
                ],
                [
                    "icon" => "fa-database",
                    "order" => 10,
                    "parent_id" => 13,
                    "permission" => NULL,
                    "title" => "數據庫",
                    "uri" => "helpers/terminal/database"
                ],
                [
                    "icon" => "fa-terminal",
                    "order" => 11,
                    "parent_id" => 13,
                    "permission" => NULL,
                    "title" => "終端機",
                    "uri" => "helpers/terminal/artisan"
                ],
                [
                    "icon" => "fa-list-alt",
                    "order" => 12,
                    "parent_id" => 13,
                    "permission" => NULL,
                    "title" => "路由列表",
                    "uri" => "helpers/routes"
                ],
                [
                    "icon" => "fa-users",
                    "order" => 2,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "會員管理",
                    "uri" => "/users"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "http_method" => "",
                    "http_path" => "*",
                    "name" => "All permission",
                    "slug" => "*"
                ],
                [
                    "http_method" => "GET",
                    "http_path" => "/",
                    "name" => "Dashboard",
                    "slug" => "dashboard"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout",
                    "name" => "Login",
                    "slug" => "auth.login"
                ],
                [
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting",
                    "name" => "User setting",
                    "slug" => "auth.setting"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
                    "name" => "Auth management",
                    "slug" => "auth.management"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/helpers/*",
                    "name" => "Admin helpers",
                    "slug" => "ext.helpers"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "menu_id" => 2,
                    "role_id" => 1
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "permission_id" => 1,
                    "role_id" => 1
                ]
            ]
        );

        // finish
    }
}
