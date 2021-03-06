<?php
include_once 'app/core/BaseRepository.inc.php';
include_once 'Brand.inc.php';

class BrandRepository extends BaseRepository {

    protected static $table = 'brand';

    public static function get_all($connection, $company_id) {
        $brands = array();

        $results = parent::get_all($connection, $company_id);

        if (count($results)) {
            foreach ($results as $row) {
                $brands[] = new Brand(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $brands;
    }

    public static function get_all_with_limit_and_offset($connection, $company_id, $limit, $offset) {
        $brands = array();

        $results = parent::get_all_with_limit_and_offset($connection, $company_id, $limit, $offset);

        if (count($results)) {
            foreach ($results as $row) {
                $brands[] = new Brand(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $brands;
    }

    public static function get_all_active($connection, $company_id) {
        $brands = array();

        $results = parent::get_all_active($connection, $company_id);

        if (count($results)) {
            foreach ($results as $row) {
                $brands[] = new Brand(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $brands;
    }

    public static function get_by_id($connection, $company_id, $id) {
        $brand = null;

        $result = parent::get_by_id($connection, $company_id, $id);

        if (!empty($result)) {
            $brand = new Brand(
                $result['company_id'],
                $result['id'],
                $result['name'],
                $result['active'],
                $result['created_at'],
                $result['updated_at']
            );
        }

        return $brand;
    }

    public static function get_by_name($connection, $company_id, $name) {
        $brands = array();

        $results = parent::get_by_name($connection, $company_id, $name);

        if (count($results)) {
            foreach ($results as $row) {
                $brands[] = new Brand(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $brands;
    }

    public static function get_by_any($connection, $company_id, $any) {
        $brands = array();

        $results = parent::get_by_any($connection, $company_id, $any);

        if (count($results)) {
            foreach ($results as $row) {
                $brands[] = new Brand(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $brands;
    }

    public static function get_by_any_with_limit_and_offset($connection, $company_id, $any, $limit, $offset) {
        $brands = array();

        $results = parent::get_by_any_with_limit_and_offset($connection, $company_id, $any, $limit, $offset);

        if (count($results)) {
            foreach ($results as $row) {
                $brands[] = new Brand(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $brands;
    }

}
?>