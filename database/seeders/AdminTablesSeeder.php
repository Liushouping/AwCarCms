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
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "儀表板",
                    "icon" => "fa-bar-chart",
                    "uri" => "/",
                    "permission" => "dashboard"
                ],
                [
                    "parent_id" => 0,
                    "order" => 15,
                    "title" => "管理面板",
                    "icon" => "fa-tasks",
                    "uri" => NULL,
                    "permission" => "*"
                ],
                [
                    "parent_id" => 2,
                    "order" => 16,
                    "title" => "管理員",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 17,
                    "title" => "角色",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 18,
                    "title" => "權限",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 19,
                    "title" => "選單",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 20,
                    "title" => "日誌",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "廣告橫幅",
                    "icon" => "fa-desktop",
                    "uri" => "/banners",
                    "permission" => "banners"
                ],
                [
                    "parent_id" => 0,
                    "order" => 3,
                    "title" => "最新優惠",
                    "icon" => "fa-bullseye",
                    "uri" => "/activitys",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 8,
                    "title" => "媒體管理",
                    "icon" => "fa-cloud",
                    "uri" => "/media",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 9,
                    "title" => "網站設置",
                    "icon" => "fa-briefcase",
                    "uri" => "/config",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 10,
                    "title" => "工具面板",
                    "icon" => "fa-gears",
                    "uri" => NULL,
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 11,
                    "title" => "腳手架",
                    "icon" => "fa-keyboard-o",
                    "uri" => "helpers/scaffold",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 12,
                    "title" => "數據庫",
                    "icon" => "fa-database",
                    "uri" => "helpers/terminal/database",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 13,
                    "title" => "終端機",
                    "icon" => "fa-terminal",
                    "uri" => "helpers/terminal/artisan",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 14,
                    "title" => "路由列表",
                    "icon" => "fa-list-alt",
                    "uri" => "helpers/routes",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 4,
                    "title" => "超跑車款",
                    "icon" => "fa-car",
                    "uri" => "/cars",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 5,
                    "title" => "性能車款",
                    "icon" => "fa-power-off",
                    "uri" => "/powers",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 7,
                    "title" => "租車流程",
                    "icon" => "fa-clone",
                    "uri" => "/sops",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 6,
                    "title" => "租車須知",
                    "icon" => "fa-fa",
                    "uri" => "/notices",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 0,
                    "title" => "路由",
                    "icon" => "fa-adjust",
                    "uri" => "helpers/routes",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 0,
                    "title" => "腳手架",
                    "icon" => "fa-android",
                    "uri" => "/helpers/scaffold",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 0,
                    "title" => "數據庫",
                    "icon" => "fa-american-sign-language-interpreting",
                    "uri" => "/helpers/terminal/database",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 0,
                    "title" => "終端機",
                    "icon" => "fa-asterisk",
                    "uri" => "/helpers/terminal/artisan",
                    "permission" => NULL
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "*"
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/"
                ],
                [
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout"
                ],
                [
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting"
                ],
                [
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs"
                ],
                [
                    "name" => "Admin helpers",
                    "slug" => "ext.helpers",
                    "http_method" => "",
                    "http_path" => "/helpers/*"
                ],
                [
                    "name" => "廣告橫幅",
                    "slug" => "banners",
                    "http_method" => "",
                    "http_path" => "/banners*"
                ],
                [
                    "name" => "最新優惠",
                    "slug" => "activitys",
                    "http_method" => "",
                    "http_path" => "/activitys*"
                ],
                [
                    "name" => "超能車款",
                    "slug" => "cars",
                    "http_method" => "",
                    "http_path" => "/cars*"
                ],
                [
                    "name" => "性能車款",
                    "slug" => "powers",
                    "http_method" => "",
                    "http_path" => "/powers*"
                ],
                [
                    "name" => "租車流程",
                    "slug" => "sops",
                    "http_method" => "",
                    "http_path" => "/sops*"
                ],
                [
                    "name" => "租車須知",
                    "slug" => "notices",
                    "http_method" => "",
                    "http_path" => "/notices*"
                ],
                [
                    "name" => "網站配置",
                    "slug" => "config",
                    "http_method" => "",
                    "http_path" => "/config*"
                ],
                [
                    "name" => "媒體管理",
                    "slug" => "media",
                    "http_method" => "",
                    "http_path" => "/media*"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ],
                [
                    "name" => "運營",
                    "slug" => "運營"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "role_id" => 1,
                    "menu_id" => 2
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 2
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 3
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 7
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 8
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 9
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 10
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 11
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 12
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 13
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 14
                ]
            ]
        );

        // finish
    }
}
