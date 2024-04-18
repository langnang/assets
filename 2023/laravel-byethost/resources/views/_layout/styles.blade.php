@php
  $data = $data ?? [];
@endphp
{{-- <link rel="stylesheet" href="/public/vendor/googlefonts/Roboto.css"> --}}
<link rel="stylesheet" href="/public/vendor/normalize.css/normalize.css">
<link rel="stylesheet" href="/public/vendor/animate.css/animate.min.css">
<link rel="stylesheet" href="/public/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/vendor/bootstrap-icons/bootstrap-icons.min.css">
<link rel="stylesheet" href="/public/vendor/patternfly-bootstrap-treeview/bootstrap-treeview.min.css">

<link rel="stylesheet" href="/public/vendor/fontawesome/css/all.min.css">
<link rel="stylesheet" href="/public/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
<link rel="stylesheet" href="/public/vendor/highlight.js/css/default.min.css">
<link rel="stylesheet" href="/public/vendor/highlight.js/css/vs2015.min.css">
<link rel="stylesheet" href="/public/vendor/highlightjs-copy/highlightjs-copy.min.css">
{{-- <link rel="stylesheet" href="/public/vendor/bootstrap/css/bootstrap-theme.min.css"> --}}
<link rel="stylesheet" href="/public/vendor/tocbot/tocbot.css">
<link rel="stylesheet" href="/public/css/app.css">
<style>
  /* body {
    font-family: 'Roboto', sans-serif;
    overflow-x: hidden;
  }

  footer {
    padding: 30px 0;
    background-color: #343a40;
    color: #f8f9fa;
  } */


  /* .scrollbar {
    margin-left: 30px;
    float: left;
    height: 300px;
    width: 65px;
    background: #fff;
    overflow-y: scroll;
    margin-bottom: 25px;
  }

  .force-overflow {
    min-height: 450px;
  }

  .scrollbar-primary::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-primary::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #4285F4;
  }

  .scrollbar-danger::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
  }

  .scrollbar-danger::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-danger::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #ff3547;
  }

  .scrollbar-warning::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
  }

  .scrollbar-warning::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-warning::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #FF8800;
  }

  .scrollbar-success::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
  }

  .scrollbar-success::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-success::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #00C851;
  }

  .scrollbar-info::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
  }

  .scrollbar-info::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-info::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #33b5e5;
  }

  .scrollbar-default::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
  }

  .scrollbar-default::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-default::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #2BBBAD;
  }

  .scrollbar-secondary::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
  }

  .scrollbar-secondary::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  .scrollbar-secondary::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #aa66cc;
  } */

  .panel {
    /* overflow: hidden; */
  }

  .navbar {}

  .navbar-brand {
    /* padding: 20px 30px; */
    /* height: 70px; */
    /* font-size: 32px; */
  }
</style>
@foreach ($data as $style)
  <link rel="stylesheet" href="/public/vendor/{{ $style }}">
@endforeach
