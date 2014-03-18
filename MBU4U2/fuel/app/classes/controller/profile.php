<?php
class Controller_Profile extends Controller
{
    public function action_index()
    {
      return Response::forge(View::forge('home/profile'));

    }

}