<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
{

    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_posts',
            'add_posts',
            'edit_posts',
            'delete_posts',

            'view_companies',
            'add_companies',
            'edit_companies',
            'delete_companies',

            'view_complexes',
            'add_complexes',
            'edit_complexes',
            'delete_complexes',

            'view_banks',
            'add_banks',
            'edit_banks',
            'delete_banks',

            'view_shops',
            'add_shops',
            'edit_shops',
            'delete_shops',

            'view_tenants',
            'add_tenants',
            'edit_tenants',
            'delete_tenants',

            'view_shopbooks',
            'add_shopbooks',
            'edit_shopbooks',
            'delete_shopbooks',

            'view_categories',
            'add_categories',
            'edit_categories',
            'delete_categories',

            'view_transactions',
            'add_transactions',
            'edit_transactions',
            'delete_transactions',

            'view_expenses',
            'add_expenses',
            'edit_expenses',
            'delete_expenses',

            'view_rentcollects',
            'add_rentcollects',
            'edit_rentcollects',
            'delete_rentcollects',

            'view_billgenerate',
            'add_billgenerate',
            'edit_billgenerate',
            'delete_billgenerate',

            'view_companyreport',
            'add_companyreport',
            'edit_companyreport',
            'delete_companyreport',

            'view_complexreport',
            'add_complexreport',
            'edit_complexreport',
            'delete_complexreport',

            'view_rentreport',
            'add_rentreport',
            'edit_rentreport',
            'delete_rentreport',

            'view_utilityreport',
            'add_utilityreport',
            'edit_utilityreport',
            'delete_utilityreport',

            'view_tenantreport',
            'add_tenantreport',
            'edit_tenantreport',
            'delete_tenantreport',

            'view_tduereport',
            'add_tduereport',
            'edit_tduereport',
            'delete_tduereport',

            'view_bankreport',
            'add_bankreport',
            'edit_bankreport',
            'delete_bankreport',

            'view_expensereport',
            'add_expensereport',
            'edit_expensereport',
            'delete_expensereport',

            'view_inoutreport',
            'add_inoutreport',
            'edit_inoutreport',
            'delete_inoutreport',

            'view_finalreport',
            'add_finalreport',
            'edit_finalreport',
            'delete_finalreport',
        ];
    }
}
