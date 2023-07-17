<?php

include "../includes/connection.php";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Transaction History - Kids Coding Camp</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    body {
      background-color: #f8f9fa;
      color: #333;
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 1000px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .table-responsive {
      overflow-x: auto;
    }
    
    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    
    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    
    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    
    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }
    
    .table .table {
      background-color: #fff;
    }
    
    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }
    
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-primary,
    .table-primary > th,
    .table-primary > td {
      background-color: #b8daff;
    }
    
    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }
    
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
      background-color: #9fcdff;
    }
    
    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
      background-color: #d6d8db;
    }
    
    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }
    
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
      background-color: #c8cbcf;
    }
    
    .table-success,
    .table-success > th,
    .table-success > td {
      background-color: #c3e6cb;
    }
    
    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }
    
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
      background-color: #b1dfbb;
    }
    
    .table-info,
    .table-info > th,
    .table-info > td {
      background-color: #bee5eb;
    }
    
    .table-hover .table-info:hover {
      background-color: #abdde5;
    }
    
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
      background-color: #abdde5;
    }
    
    .table-warning,
    .table-warning > th,
    .table-warning > td {
      background-color: #ffeeba;
    }
    
    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }
    
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
      background-color: #ffe8a1;
    }
    
    .table-danger,
    .table-danger > th,
    .table-danger > td {
      background-color: #f5c6cb;
    }
    
    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }
    
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
      background-color: #f1b0b7;
    }
    
    .table-light,
    .table-light > th,
    .table-light > td {
      background-color: #fdfdfe;
    }
    
    .table-hover .table-light:hover {
      background-color: #ececf6;
    }
    
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
      background-color: #ececf6;
    }
    
    .table-dark,
    .table-dark > th,
    .table-dark > td {
      background-color: #c6c8ca;
    }
    
    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }
    
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
      background-color: #b9bbbe;
    }
    
    .table-active,
    .table-active > th,
    .table-active > td {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table .thead-dark th {
      color: #fff;
      background-color: #212529;
      border-color: #32383e;
    }
    
    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    
    .table-dark {
      color: #fff;
      background-color: #212529;
    }
    
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #32383e;
    }
    
    .table-dark.table-bordered {
      border: 0;
    }
    
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(255, 255, 255, 0.05);
    }
    
    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(255, 255, 255, 0.075);
    }
    
    @media (max-width: 575.98px) {
      .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-sm > .table-bordered {
        border: 0;
      }
    }
    
    @media (max-width: 767.98px) {
      .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-md > .table-bordered {
        border: 0;
      }
    }
    
    @media (max-width: 991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-lg > .table-bordered {
        border: 0;
      }
    }
    
    @media (max-width: 1199.98px) {
      .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-xl > .table-bordered {
        border: 0;
      }
    }
    
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive > .table-bordered {
      border: 0;
    }
    
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive > .table-bordered {
      border: 0;
    }
    
    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    
    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    
    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    
    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }
    
    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }
    
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-primary,
    .table-primary > th,
    .table-primary > td {
      background-color: #b8daff;
    }
    
    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }
    
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
      background-color: #9fcdff;
    }
    
    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
      background-color: #d6d8db;
    }
    
    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }
    
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
      background-color: #c8cbcf;
    }
    
    .table-success,
    .table-success > th,
    .table-success > td {
      background-color: #c3e6cb;
    }
    
    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }
    
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
      background-color: #b1dfbb;
    }
    
    .table-info,
    .table-info > th,
    .table-info > td {
      background-color: #bee5eb;
    }
    
    .table-hover .table-info:hover {
      background-color: #abdde5;
    }
    
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
      background-color: #abdde5;
    }
    
    .table-warning,
    .table-warning > th,
    .table-warning > td {
      background-color: #ffeeba;
    }
    
    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }
    
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
      background-color: #ffe8a1;
    }
    
    .table-danger,
    .table-danger > th,
    .table-danger > td {
      background-color: #f5c6cb;
    }
    
    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }
    
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
      background-color: #f1b0b7;
    }
    
    .table-light,
    .table-light > th,
    .table-light > td {
      background-color: #fdfdfe;
    }
    
    .table-hover .table-light:hover {
      background-color: #ececf6;
    }
    
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
      background-color: #ececf6;
    }
    
    .table-dark,
    .table-dark > th,
    .table-dark > td {
      background-color: #c6c8ca;
    }
    
    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }
    
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
      background-color: #b9bbbe;
    }
    
    .table-active,
    .table-active > th,
    .table-active > td {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table .thead-dark th {
      color: #fff;
      background-color: #212529;
      border-color: #32383e;
    }
    
    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    
    .table-dark {
      color: #fff;
      background-color: #212529;
    }
    
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #32383e;
    }
    
    .table-dark.table-bordered {
      border: 0;
    }
    
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    @media (max-width: 575.98px) {
      .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-sm > .table-bordered {
        border: 0;
      }
    }
    
    @media (max-width: 767.98px) {
      .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-md > .table-bordered {
        border: 0;
      }
    }
    
    @media (max-width: 991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-lg > .table-bordered {
        border: 0;
      }
    }
    
    @media (max-width: 1199.98px) {
      .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-xl > .table-bordered {
        border: 0;
      }
    }
    
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive > .table-bordered {
      border: 0;
    }
    
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive > .table-bordered {
      border: 0;
    }
    
    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    
    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    
    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    
    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }
    
    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }
    
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-primary,
    .table-primary > th,
    .table-primary > td {
      background-color: #b8daff;
    }
    
    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }
    
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
      background-color: #9fcdff;
    }
    
    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
      background-color: #d6d8db;
    }
    
    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }
    
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
      background-color: #c8cbcf;
    }
    
    .table-success,
    .table-success > th,
    .table-success > td {
      background-color: #c3e6cb;
    }
    
    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }
    
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
      background-color: #b1dfbb;
    }
    
    .table-info,
    .table-info > th,
    .table-info > td {
      background-color: #bee5eb;
    }
    
    .table-hover .table-info:hover {
      background-color: #abdde5;
    }
    
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
      background-color: #abdde5;
    }
    
    .table-warning,
    .table-warning > th,
    .table-warning > td {
      background-color: #ffeeba;
    }
    
    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }
    
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
      background-color: #ffe8a1;
    }
    
    .table-danger,
    .table-danger > th,
    .table-danger > td {
      background-color: #f5c6cb;
    }
    
    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }
    
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
      background-color: #f1b0b7;
    }
    
    .table-light,
    .table-light > th,
    .table-light > td {
      background-color: #fdfdfe;
    }
    
    .table-hover .table-light:hover {
      background-color: #ececf6;
    }
    
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
      background-color: #ececf6;
    }
    
    .table-dark,
    .table-dark > th,
    .table-dark > td {
      background-color: #c6c8ca;
    }
    
    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }
    
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
      background-color: #b9bbbe;
    }
    
    .table-active,
    .table-active > th,
    .table-active > td {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table .thead-dark th {
      color: #fff;
      background-color: #212529;
      border-color: #32383e;
    }
    
    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    
    .table-dark {
      color: #fff;
      background-color: #212529;
    }
    
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #32383e;
    }
    
    .table-dark.table-bordered {
      border: 0;
    }
    
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-responsive-sm {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive-sm > .table-bordered {
      border: 0;
    }
    
    .table-responsive-md {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive-md > .table-bordered {
      border: 0;
    }
    
    .table-responsive-lg {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive-lg > .table-bordered {
      border: 0;
    }
    
    .table-responsive-xl {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive-xl > .table-bordered {
      border: 0;
    }
    
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive > .table-bordered {
      border: 0;
    }
    
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .table-responsive > .table-bordered {
      border: 0;
    }
    
    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    
    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    
    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    
    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }
    
    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }
    
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-primary,
    .table-primary > th,
    .table-primary > td {
      background-color: #b8daff;
    }
    
    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }
    
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
      background-color: #9fcdff;
    }
    
    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
      background-color: #d6d8db;
    }
    
    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }
    
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
      background-color: #c8cbcf;
    }
    
    .table-success,
    .table-success > th,
    .table-success > td {
      background-color: #c3e6cb;
    }
    
    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }
    
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
      background-color: #b1dfbb;
    }
    
    .table-info,
    .table-info > th,
    .table-info > td {
      background-color: #bee5eb;
    }
    
    .table-hover .table-info:hover {
      background-color: #abdde5;
    }
    
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
      background-color: #abdde5;
    }
    
    .table-warning,
    .table-warning > th,
    .table-warning > td {
      background-color: #ffeeba;
    }
    
    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }
    
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
      background-color: #ffe8a1;
    }
    
    .table-danger,
    .table-danger > th,
    .table-danger > td {
      background-color: #f5c6cb;
    }
    
    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }
    
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
      background-color: #f1b0b7;
    }
    
    .table-light,
    .table-light > th,
    .table-light > td {
      background-color: #fdfdfe;
    }
    
    .table-hover .table-light:hover {
      background-color: #ececf6;
    }
    
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
      background-color: #ececf6;
    }
    
    .table-dark,
    .table-dark > th,
    .table-dark > td {
      background-color: #c6c8ca;
    }
    
    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }
    
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
      background-color: #b9bbbe;
    }
    
    .table-active,
    .table-active > th,
    .table-active > td {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table .thead-dark th {
      color: #fff;
      background-color: #212529;
      border-color: #32383e;
    }
    
    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    
    .table-dark {
      color: #fff;
      background-color: #212529;
    }
    
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #32383e;
    }
    
    .table-dark.table-bordered {
      border: 0;
    }
    
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Transaction History - Kids Coding Camp</h2>
    <?php
    $query = "SELECT SUM(amount) AS total FROM v3";
    $res = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_assoc($res);

    $total = $row['total'];

    ?>
    <h3 style="float:right">Total Amount Paid: &#8358;<?= number_format($total).'.00'; ?></h3>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>SNO.</th>
            <th>Transaction ID</th>
            <th>Parent Name</th>
            <th>Kid Name</th>
            <th>Amount</th>
            <th>Trans. Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
       
            $sn = 1;
          $sql = "SELECT * FROM v3";
          $result = mysqli_query($conn, $sql);

          while($data = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td><?=$sn++; ?></td>
            <td><?=$data['reference']; ?></td>
            <td><?=$data['parent_name']; ?></td>
            <td><?=$data['kid_name']; ?></td>
            <td><?=$data['amount']; ?></td>
            <td><?=$data['created_on']; ?></td>
            <td><a href="../success.php?reference=<?=$data['reference']; ?>" target="_blank"><button>Print Receipt</button></a></td>
          </tr>
         <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
