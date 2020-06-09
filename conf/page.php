<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'view_mhs':
      include 'pages/mhs/view_mhs.php';
      break;

    case 'add_mhs':
      include 'pages/mhs/add_mhs.php';
      break;

    case 'update_mhs';
      include 'pages/mhs/update_mhs.php';
      break;

    case 'delete_mhs';
      include 'pages/mhs/delete_mhs.php';
      break;



    case 'view_dosen':
      include 'pages/dosen/view_dosen.php';
      break;

    case 'add_dosen':
      include 'pages/dosen/add_dosen.php';
      break;

    case 'update_dosen';
      include 'pages/dosen/update_dosen.php';
      break;

    case 'delete_dosen';
      include 'pages/dosen/delete_dosen.php';
      break;



    case 'view_matkul':
      include 'pages/matkul/view_matkul.php';
      break;

    case 'add_matkul':
      include 'pages/matkul/add_matkul.php';
      break;

    case 'update_matkul';
      include 'pages/matkul/update_matkul.php';
      break;

    case 'delete_matkul';
      include 'pages/matkul/delete_matkul.php';
      break;
  }
} else {
  include "pages/dashboard.php";
}
