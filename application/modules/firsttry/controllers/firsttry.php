
<?php
class Firsttry extends MX_Controller 
{

function __construct() {
parent::__construct();
}


function hello()
{
    echo "this is firsttry";
}

function get($order_by)
{
    $this->load->model('mdl_firsttry');
    $query = $this->mdl_firsttry->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_firsttry');
    $query = $this->mdl_firsttry->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_firsttry');
    $query = $this->mdl_firsttry->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('mdl_firsttry');
    $query = $this->mdl_firsttry->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('mdl_firsttry');
    $this->mdl_firsttry->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_firsttry');
    $this->mdl_firsttry->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_firsttry');
    $this->mdl_firsttry->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('mdl_firsttry');
    $count = $this->mdl_firsttry->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('mdl_firsttry');
    $max_id = $this->mdl_firsttry->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('mdl_firsttry');
    $query = $this->mdl_firsttry->_custom_query($mysql_query);
    return $query;
}

}