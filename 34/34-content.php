<div class="container">
    <div class="row magin-row">
        <div class="col-md-10">
            <div class="type-34">
                <form action="#" method="GET" id="ftForm" name="ftForm">
                    <div id="tab" class="tab-pane">
                        <ul class="navbar-tabs">
                            <li><a class="tablinks active" onclick="openTab(event,'tab1')" id="defaultOpen">GENERAL INFORMATION</a></li>
                            <li><a class="tablinks" onclick="openTab(event,'tab2')">LOCATION</a></li>
                            <li><a class="tablinks" onclick="openTab(event,'tab3')">AMENITIES</a></li>
                            <li><a class="tablinks" onclick="openTab(event,'tab4')">OTHER</a></li>
                        </ul>

                        <div id="tab1" class="tabcontent">
                            <div class="tab1">
                                <div class="row magin-row">
                                    <div class="col-md-4 tab1-item">
                                        <label for="category">Category</label>
                                        <br>
                                        <select name="category" id="category" class="selection">
                                            <option value="1">Country house</option>
                                            <option value="2">Country house</option>
                                            <option value="3">Country house</option>
                                            <option value="4">Country house</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 tab1-item">
                                        <label for="amount">Price range</label>
                                        <div id="slider-range" class="slider-ranges"></div>
                                        <input name="amount" class="amount" type="text" id="amount" readonly>
                                    </div>
                                    <div class="col-md-4 tab1-item">
                                        <label for="keyword">Keyword</label>
                                        <br>
                                        <input type="text" name="keyword" id="keyword" class="keyword">
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-4 tab1-item">
                                        <label for="sortBy">Sort by</label>
                                        <br>
                                        <select name="sortby" id="sortBy" class="selection">
                                            <option value="Sort by1">Sort by1</option>
                                            <option value="Sort by2">Sort by2</option>
                                            <option value="Sort by3">Sort by3</option>
                                            <option value="Sort by4">Sort by4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 tab1-item">
                                        <label for="orderBy">Order by</label>
                                        <br>
                                        <select name="orderby" id="orderBy" class="selection">
                                            <option value="Order by1">Order by1</option>
                                            <option value="Order by2">Order by2</option>
                                            <option value="Order by3">Order by3</option>
                                            <option value="Order by4">Order by4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tabcontent">
                            <div class="tab2">
                                <div class="row magin-row">
                                    <div class="col-md-4">
                                        <label for="address">Address</label><br>
                                        <input type="text" id="address" class="finput" name="address">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="state">State/Province</label><br>
                                        <select name="state" id="state" class="selection">
                                            <option value="-All State">- All State -</option>
                                            <option value="state1">state1</option>
                                            <option value="state2">state2</option>
                                            <option value="state3">state3</option>
                                            <option value="state4">state4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="city">City</label><br>
                                        <select name="city" id="city" class="selection">
                                            <option value="-All city">- All City -</option>
                                            <option value="city1">city1</option>
                                            <option value="city2">city2</option>
                                            <option value="city3">city3</option>
                                            <option value="city4">city4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-8 ">
                                        <label for="postcode">Postcode</label><br>
                                        <input type="text" id="postcode" name="postcode" class="finput"
                                            placeholder="Postcode"><br>
                                        <label for="radius-search">Or</label><br>
                                        <select name="radius-search" id="radius-search" class="selection-radius-search">
                                            <option value="5 Kilometter">5 Kilometter</option>
                                            <option value="15 Kilometter">15 Kilometter</option>
                                            <option value="25 Kilometter">25 Kilometter</option>
                                            <option value="35 Kilometter">35 Kilometter</option>
                                            <option value="45 Kilometter">45 Kilometter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tabcontent">
                            <div class="tab3">
                                <div class="row magin-row">
                                    <div class="col-md-12">
                                        General Amenities
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="checkbox"
                                                    value="checkedValue">
                                                Display value
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="checkbox"
                                                value="checkedValue">
                                            Display value
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="checkbox"
                                                value="checkedValue">
                                            Display value
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="checkbox"
                                                value="checkedValue">
                                            Display value
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-12">
                                        General Amenities
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="checkbox"
                                                    value="checkedValue">
                                                Display value
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="checkbox"
                                                value="checkedValue">
                                            Display value
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="checkbox"
                                                value="checkedValue">
                                            Display value
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="checkbox"
                                                value="checkedValue">
                                            Display value
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="tab4" class="tabcontent">
                            <div class="tab4">
                                <div class="row magin-row">
                                    <div class="col-md-4">
                                        <input type="checkbox" name="checkbox" id="checkbox">
                                        <label for="checkbox">Only Featured Properties</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Bathrooms">Bathrooms</label><br>
                                        <select name="Bathrooms" id="Bathrooms" class="selection">
                                            <option value="any">any</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Bedrooms">Bedrooms</label><br>
                                        <select name="Bedrooms" id="Bedrooms" class="selection">
                                            <option value="any">any</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-4">
                                        <label for="Floors">Floors:</label><br>
                                        <select name="Floors" id="Floors" class="selection">
                                            <option value="any">any</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Rooms">Rooms:</label><br>
                                        <select name="Rooms" id="Rooms" class="selection">
                                            <option value="any">any</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="content1">Square meter (sqmt) :</label>
                                        <div class="content">
                                            <input id="content1" type="text" name="min" class="metter"
                                                placeholder="Min">
                                            <p>-</p>
                                            <input type="text" name="max" class="metter" placeholder="Max">
                                        </div>
                                    </div>
                                </div>
                                <div class="row magin-row">
                                    <div class="col-md-4">
                                        <label for="content2">Lot Size (sqmt) :</label>
                                        <div class="content">
                                            <input id="content2" type="text" name="min" class="metter"
                                                placeholder="Min">
                                            <p>-</p>
                                            <input type="text" name="max" class="metter" placeholder="Max">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <input type="submit" value="Search" class="bSearch">
                        <input type="submit" value="Reset" class="bReset">
                    </div>
                </form>
                <p>Please select at least one search criteria</p>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
