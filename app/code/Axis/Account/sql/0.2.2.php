<?php
/**
 * Axis
 *
 * This file is part of Axis.
 *
 * Axis is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Axis is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Axis.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category    Axis
 * @package     Axis_Admin
 * @copyright   Copyright 2008-2011 Axis
 * @license     GNU Public License V3.0
 */

class Axis_Account_Upgrade_0_2_2 extends Axis_Core_Model_Migration_Abstract
{
    protected $_version = '0.2.2';
    protected $_info = '';
    
    //depends axis_core 0.1.6 upgrade

    public function up()
    {
        Axis::model('admin/menu')
            ->edit('Manage Customers', null, 'account/customer')
            ->edit('Customer Groups', null, 'account/group')
            ->edit('Wishlist', null, 'account/wishlist')
            ->edit('Customer Info Fields', null, 'account/field')
        ;
        
        Axis::model('admin/acl_resource')
            ->rename('admin/customer_index/index', 'admin/account/customer/index')
            ->rename('admin/customer_index/list', 'admin/account/customer/list')
            ->rename('admin/customer_index/delete', 'admin/account/customer/remove')
            ->rename('admin/customer_index/save-customer', 'admin/account/customer/save')
            ->rename('admin/customer_index/batch-save', 'admin/account/customer/batch-save')
            ->rename('admin/customer_index/get-address-list', 'admin/account/address/list')
            ->rename('admin/customer_index', 'admin/account/customer')
            ->remove('admin/customer_index')
            
            ->rename('admin/customer_group/index', 'admin/account/group/index')
            ->rename('admin/customer_group/list', 'admin/account/group/list')
            ->rename('admin/customer_group/save', 'admin/account/group/batch-save')
            ->rename('admin/customer_group/delete', 'admin/account/group/remove')
            ->rename('admin/customer_group', 'admin/account/group')
            ->remove('admin/customer_group')
            
            ->rename('admin/customer_wishlist/index', 'admin/account/wishlist/index')
            ->rename('admin/customer_wishlist/list', 'admin/account/wishlist/list')
            ->rename('admin/customer_wishlist', 'admin/account/wishlist')
            ->remove('admin/customer_wishlist')
            
            ->rename('admin/customer_custom-fields/get-groups',                   'admin/account/field-group/list')
            ->rename('admin/customer_custom-fields/get-group-info',               'admin/account/field-group/load')
            ->rename('admin/customer_custom-fields/ajax-save-group',              'admin/account/field-group/save')
            ->rename('admin/customer_custom-fields/ajax-delete-group',            'admin/account/field-group/remove')
            
            ->rename('admin/customer_custom-fields/ajax-delete-value-set' ,       'admin/account/field/ajax-delete-value-set')
            ->rename('admin/customer_custom-fields/ajax-delete-value-set-values', 'admin/account/field/ajax-delete-value-set-values')
            ->rename('admin/customer_custom-fields/ajax-save-value-set',          'admin/account/field/ajax-save-value-set')
            ->rename('admin/customer_custom-fields/ajax-save-value-set-values',   'admin/account/field/ajax-save-value-set-values')
            ->rename('admin/customer_custom-fields/batch-save-fields',            'admin/account/field/batch-save-fields')
            ->rename('admin/customer_custom-fields/delete-fields',                'admin/account/field/delete-fields')
            ->rename('admin/customer_custom-fields/get-fields',                   'admin/account/field/get-fields')
            ->rename('admin/customer_custom-fields/get-type',                     'admin/account/field/get-type')
            ->rename('admin/customer_custom-fields/get-validator',                'admin/account/field/get-validator')
            ->rename('admin/customer_custom-fields/get-value-sets',               'admin/account/field/get-value-sets')
            ->rename('admin/customer_custom-fields/get-values',                   'admin/account/field/get-values')
            ->rename('admin/customer_custom-fields/index',                        'admin/account/field/index')
            ->rename('admin/customer_custom-fields/save-field',                   'admin/account/field/save-field')
            ->rename('admin/customer_custom-fields',                              'admin/account/field')
            ->remove('admin/customer_custom-fields')
            
        ;
    }

    public function down()
    {

    }
}