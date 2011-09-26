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
 * @package     Axis_Sitemap
 * @subpackage  Axis_Sitemap_Model
 * @copyright   Copyright 2008-2011 Axis
 * @license     GNU Public License V3.0
 */

/**
 * @category    Axis
 * @package     Axis_Sitemap
 * @subpackage  Axis_Sitemap_Model
 * @author      Axis Core Team <core@axiscommerce.com>
 */
class Axis_Sitemap_Model_Observer
{
    public function prepareAdminNavigationBox(Axis_Admin_Box_Navigation $box)
    {
        $box->addItem(array(
            'cms' => array(
                'pages' => array(
                    'sitemap' => array(
                        'label'         => 'Sitemap',
                        'order'         => 50,
                        'translator'    => 'Axis_Sitemap',
                        'module'        => 'Axis_Sitemap',
                        'route'         => 'admin/sitemap'
                    )
                )
            )
        ));
    }
}