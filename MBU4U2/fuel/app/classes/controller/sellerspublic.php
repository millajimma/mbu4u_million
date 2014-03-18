<?php
class Controller_Sellerspublic extends Controller
{
    public function action_index()
    {
        return Response::forge(View::forge('home/sellerspublic'));

    }

    public function action_view()
    {
        return Response::forge(View::forge('home/public_detail'));

    }
}