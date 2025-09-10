<?php defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

class index extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    // $this->load->model('reimbursement_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('upload');
  }

  function index()
  {
    $this->load->view('home');
  }

  function about_us()
  {
    var_dump("Page under construction");
  }

  function contact_us()
  {
    var_dump("Page under construction");
  }

  function library()
  {
    var_dump("Page under construction");
  }

  function news_event()
  {
    $this->load->view('newsevent');
  }

  function ps_iotsolution()
  {
    var_dump("Page under construction");
  }

  function ps_prod()
  {
    var_dump("Page under construction");
  }

  function ps_serv_silicone()
  {
    var_dump("Page under construction");
  }

  function ps_serv_simulation()
  {
    var_dump("Page under construction");
  }
}
