@extends('layouts.fe_master')
@section('content')

<h1>Olá, {{ auth()->user()->username }}</h1>
