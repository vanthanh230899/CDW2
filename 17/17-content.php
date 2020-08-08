<div class="type-17">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="tab" class="tab-pane">
                    <ul class="navbar-tabs">
                        <li><a class="tablinks active" onclick="openTab(event,'tab1')" id="defaultOpen">GALLERY</a></li>
                        <li><a class=" tablinks" onclick="openTab(event,'tab2')">COMMENTS</a></li>
                        <li><a class="tablinks" onclick="openTab(event,'tab3')">VIRTUAL TOUR</a></li>
                        <li><a class="tablinks" onclick="openTab(event,'tab4')">SHARING</a></li>
                        <li><a class="tablinks" onclick="openTab(event,'tab5')">REQUEST MORE DETAILS</a></li>
                        <li><a class="tablinks" onclick="openTab(event,'tab6')">HISTORY & TAX</a></li>
                    </ul>
                    <div id="tab1" class="tabcontent">
                        <div class="tab1">
                            <div class="row">
                                <div class="col-md-3"><img onclick="modalTab(event,'thumbnail1')" src="images/17-1.png" alt="17-1" class="img-thumbnail"></div>
                                <div class="col-md-3"><img onclick="modalTab(event,'thumbnail2')" src="images/17-2.png" alt="17-2" class="img-thumbnail"></div>
                                <div class="col-md-3"><img onclick="modalTab(event,'thumbnail3')" src="images/17-3.png" alt="17-3" class="img-thumbnail"></div>
                            </div>
                            <div class="modal" id="modal">
                                <div class="modal-content">
                                    <img src="images/17-4.png" alt="17-4" class="img-thumbnail thumbnail" id="thumbnail1">
                                    <img src="images/17-5.png" alt="17-5" class="img-thumbnail thumbnail" id="thumbnail2">
                                    <img src="images/17-6.png" alt="17-6" class="img-thumbnail thumbnail" id="thumbnail3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tabcontent">
                        <div class="tab2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-header">
                                        There are no comment there
                                    </div>
                                    <div class="block-caption">
                                        ADD COMMENT
                                    </div>
                                    <form action="#" name="commentForm" id="commentForm" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="rate1" class="edit-label">Rating</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Location</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="rate1" id="rate1" class="edit-select">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Value for money</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="rate2" id="rate2" class="edit-select">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Facilities</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="rate3" id="rate3" class="edit-select">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Cleanliness</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="rate4" id="rate4" class="edit-select">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="author" class="edit-label">Author</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="author" id="author">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="title" class="edit-label">Title</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="title" id="title" placeholder="Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="comment_message" class="edit-label">Message</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <textarea name="comment_message" id="comment_message" cols="23" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="code" class="edit-label">Security Code</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>Please insert the symbols from the Image to field below.</p>
                                                        <img src="images/code.jpg" alt="code">
                                                        <input type="text" id="code" name="code" class="input-code">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" value="submit" class="edit-input">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tabcontent">
                        <div class="tab3">
                            <iframe src="//www.youtube.com/embed/fzsDbpzev7c" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div id="tab4" class="tabcontent">
                        <div class="tab4">
                            <form action="#">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="firstName" class="edit-label">Friend Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="firstName" id="firstName" placeholder="Friend Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="friendEmail" class="edit-label">Friend E-mail</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="friendEmail" id="friendEmail" placeholder="Friend E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="yourName" class="edit-label">Your Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="yourName" id="yourName" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="yourEmail" class="edit-label">Your E-mail</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="yourEmail" id="yourEmail" placeholder="Your E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="massage" class="edit-label">Message</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="massage" id="massage" cols="23" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Send" class="edit-submit">
                            </form>
                        </div>
                    </div>
                    <div id="tab5" class="tabcontent">
                        <div class="tab5">
                            <form action="#">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="subject" class="edit-label">Subject</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="subject" onchange="changSubject(event)" id="subject">
                                                <option value="1">Tell Me More about This Property</option>
                                                <option value="2">Request A Showing</option>
                                                <option value="3">Request Recent Sales</option>
                                                <option value="4">Request School Information</option>
                                                <option value="5">Request Neighborhood Information</option>
                                                <option value="6">Request Similar Listings Via Email</option>
                                                <option value="7">Request Property availability information</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="yourNameSubject" class="edit-label">Your Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="yourNameSubject" id="yourNameSubject" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="phone" class="edit-label">Phone</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="phone" id="phone" placeholder="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="yourEmailSubject" class="edit-label">Your E-mail</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="yourEmailSubject" id="yourEmailSubject" placeholder="Your E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="massage" class="edit-label">Message</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="massage" id="massageSubject" cols="23" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="checkbox" id="checkbox" value="checkedValue">
                                        I have read and agree to the term and condition
                                    </label>
                                </div>
                                <input type="submit" value="Send" id="submitSubject" class="edit-submit">
                            </form>
                        </div>
                    </div>
                    <div id="tab6" class="tabcontent">
                        <div class="tab6">
                            <h4>Property History</h4>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Even</th>
                                    <th>Price</th>
                                    <th>Source</th>
                                </tr>
                                <tr>
                                    <td>2012-12-22</td>
                                    <td>Sold</td>
                                    <td>$ 230.000</td>
                                    <td>realestate.com.au</td>
                                </tr>
                                <tr>
                                    <td>2012-12-22</td>
                                    <td>Sold</td>
                                    <td>$ 230.000</td>
                                    <td>realestate.com.au</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="related">
                    <h4 class="title">Related Properties</h4>
                    <div class="block-caption">
                        PROPERTIES IN SAME PROPERTY TYPE
                    </div>
                    <div class="row">
                        <div class="col-md-6 item">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="#"><img src="images/17-realated-1.png" alt="17-realated"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <span>395 Dogwood Ln</span>
                                        <span>For sale</span>
                                        <p>5 Sinnamon Beach Way, Abbeville, 32137, AL, US</p>
                                        <span class="price">€ 1.500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="#"><img src="images/17-realated-3.png" alt="17-realated"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <span>333457, Miami lounge world</span>
                                        <span>For sale</span>
                                        <p>1425 Brickell Av Unit: 48E, Abbeville, 33131 , AL, Florida</p>
                                        <span class="price">€ 950.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 item">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="#"><img src="images/17-realated-2.png" alt="17-realated"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <span>29043, Family Home</span>
                                        <span>For sale</span>
                                        <p>15 Sun Street, Abbeville, 33133, AL, Florida</p>
                                        <span class="price">€ 235.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>