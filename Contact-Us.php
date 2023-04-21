
<?php
    include('header.php');
?>

<!-- braudcumb section start -->

<div class="braudcumb_section">
    <div class="container">
        <h3>Contact Us</h3>
        <div class="col-lg-8 col-md-10 col-sm-12 p-0">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolorem sit voluptates nesciunt quaerat ea ducimus facere quod. Nulla exercitationem cumque nobis eum, optio molestias harum quam numquam illum molestiae, dicta fugit, voluptatibus repudiandae mollitia.</p>
        </div>
    </div>
</div>

<!-- braudcumb section end -->

<!-- contact us page code here -->

<div class="contact_page">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="form_div">
                    <h5>Get In Touch</h5>
                    <h1>CONTACT US TO GET MORE INFO</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor a, porro obcaecati nemo voluptate nam repellendus dolores atque iusto consequatur quia odit vero aliquid necessitatibus eveniet blanditiis quisquam culpa voluptates voluptas laboriosam sit. Atque, expedita?</p>

                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="Con_Name" placeholder="Your Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="Phone" name="Con_Phone" placeholder="Your Phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Comment</label>
                            <textarea name="Con_Comment" id="" cols="30" rows="5" class="form-control" placeholder="Your Comment"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" name='submit'>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="other_details_div">
                    <h3>Need help ?? Feel free to contact us !</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio delectus hic atque id, inventore fugiat quis facilis omnis earum et reprehenderit! Error nam sit ad soluta delectus id asperiores possimus dolores ipsa explicabo eius, hic similique maiores recusandae consequatur vero non molestias adipisci sapiente molestiae atque culpa optio. Voluptatem, dignissimos.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate culpa maiores nobis quas magnam, iste iusto sapiente similique ad optio. Eaque incidunt fugiat facere dicta!</p>

                    <div class="details_div">
                        <h2>Address : </h2>
                        <p>Vpo Barwa Teh. Siwani, Hisar Haryana</p>
                    </div>

                    <div class="details_div">
                        <h2>Call Us : </h2>
                        <p><a href="tel:+91 7355870559">+91 7355870559</a></p>
                    </div>

                    <div class="details_div">
                        <h2>Email For Us : </h2>
                        <p><a href="mailto:info@webcoster.com">info@webcoster.com</a></p>
                    </div>

                    <div class="details_div">
                        <h2>Follow Us : </h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fab fa-instagram-square"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fab fa-whatsapp-square"></i></a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.064386923968!2d75.59931111501658!3d28.955814682291336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3913b7fe2a46cbf5%3A0xb4c870c34e96b6b2!2sWebcoster!5e0!3m2!1sen!2sin!4v1644745534581!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<!-- contact us page code here end -->


<?php
    include('footer.php');
?>