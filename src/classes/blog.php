<?php

namespace blog;

class Blog
{
    public function __construct()
    {
    }
    public function header()
    {
        $html = " <header class='container-fluid p-0 header pb-5 pt-2'>
        <div class='row'>
            <div class='col-md-3 col-lg-3 col-sm-3 mx-auto'>
                <div class='brand '>
                <img class='bg-dark' src=" . URLROOT . '/assests/imgs/cedcoss-logo.png' . " style='width:200px'>
                </div>
            </div>
            <div class='col-4'>
    
            </div>
          
            <div class='col-2'></div>
            <div class='col-1 mx-auto mt-3'>
            <a href='".URLROOT ."/admin/' class='btn border-0  rounded-pill bg-dark text-light'>
            <span class='h5'>Sign In</span>
            </a>
            </div>
        </div>
        <hr>
        <div class='row container mt-5'>
            <div class='col-1'></div>
            <div class='col-4 h1 ms-4 mx-auto mb-3'>
                Write Your Blogs and Be a Creator
                <br>
                <br>
                <span class='h6 mt-4'>It's easy and free to post your thinking on any topic and connect with millions of readers.</span>
            </div>
            <div class='col-3'></div>
            <div class='col-3 h2 rounded-pills mx-auto'>
                Get Started
            </div>
        </div>
        </header>";
        return $html;
    }

    public function footer()
    {
        $html = "<footer class='text-muted py-5 bg-dark'>
            <div class='container'>
              <p class='float-end mb-1'>
                <a href='#'>Back to top</a>
              </p>
              <p class='mb-1'>&copy; CEDCOSS Technologies</p>
            </div>
          </footer>";
          return $html;
    }
}
