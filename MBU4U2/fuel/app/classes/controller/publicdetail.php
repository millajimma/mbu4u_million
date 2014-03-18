<?php
class Controller_Publicdetail extends Controller
{
    public function action_view()
    {
        return Response::forge(View::forge('home/public_detail'));

    }
}