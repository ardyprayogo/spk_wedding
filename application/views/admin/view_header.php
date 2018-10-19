<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Wedding Organizer | <?php echo $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">
    <!-- Font -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css')?>">
  </head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url('admin') ?>">Star Enterprise Wedding</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item
			      <?php
			      if ($page === 'dashboard')
			      {
			      	echo 'active';
			      }
			      ?>
			      ">
			        <a class="nav-link" href="<?php echo site_url('admin') ?>">Dashboard</a>
			      </li>
			      <li class="nav-item
			      <?php
			      if ($page === 'member')
			      {
			      	echo 'active';
			      }
			      ?>
			      ">
			        <a class="nav-link" href="<?php echo site_url('admin/member') ?>">Member</a>
			      </li>
			      <li class="nav-item
			      <?php
			      if ($page === 'paket')
			      {
			      	echo 'active';
			      }
			      ?>
			      ">
			        <a class="nav-link" href="<?php echo site_url('admin/paket') ?>">Paket</a>
			      </li>
			      <li class="nav-item
			      <?php
			      if ($page === 'pemesanan')
			      {
			      	echo 'active';
			      }
			      ?>
			      ">
			        <a class="nav-link" href="<?php echo site_url('admin/pemesanan') ?>">Pemesanan</a>
			      </li>
			      <li class="nav-item
			      <?php
			      if ($page === 'laporan')
			      {
			      	echo 'active';
			      }
			      ?>
			      ">
			        <a class="nav-link" href="<?php echo site_url('admin/laporan') ?>">Laporan</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('admin/logout') ?>">Logout</a>
			      </li>
			    </ul>
			  </div>
			</div>
		  
		</nav>