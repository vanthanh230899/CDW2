<div class="container">
    <div class="row">
        <div class="col-lg-9">

        </div>
        <div class="col-lg-3">
            <div class="type-26">
                <H5 class="title">SEARCH PROPERTIES</H5>
                <form action="#">
                    <div class="ospsearch_ul">
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Basic infomation
                        </div>
                        <div id="basic" class="content">
                            <label for="user" class="element-label">User type:</label>
                            <select name="user" id="user" class="element-select2">
                                <option value="-1" selected>Any</option>
                                <option value="0">Ogent</option>
                                <option value="1">Owner</option>
                            </select>
                            <label for="category" class="element-label">Catarory:</label>
                            <select class="element-select2" name="property-type" id="category" multiple="multiple">
                                <option value="1">Country House</option>
                                <option value="2">Villa</option>
                                <option value="3">Apartment</option>
                                <option value="4">office</option>
                                <option value="5">House</option>
                                <option value="6">building</option>
                                <option value="7">shop</option>
                                <option value="8">acreage</option>
                            </select>
                            <label for="property-type" class="element-label">Property type:</label>
                            <select class="element-select2" name="property-type" id="property-type">
                                <option value="1">any</option>
                                <option value="2">For lease</option>
                                <option value="3">For rent</option>
                                <option value="4">For sale</option>
                                <option value="5">For sale or lease</option>
                                <option value="6">Pending</option>
                                <option value="7">Sold</option>
                            </select>
                            <label class="element-label">Price:</label>
                            <div id="slider-range" class="slider-ranges"></div>
                            <input name="amount" class="amount" type="text" id="amount" readonly>
                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Address
                        </div>
                        <div id="address" class="content">
                            <label for="state" class="element-label">State:</label>
                            <select name="state" class="element-select2" id="state">
                                <option value="1">Any</option>
                                <option value="2">California</option>
                                <option value="3">lova</option>
                                <option value="4">alatca</option>
                            </select>
                            <label for="city" class="element-label">City:</label>
                            <select name="city" id="city" disabled class="element-select">
                                <option value="1" selected>Any</option>
                                <option value="2">California</option>
                                <option value="3">lova</option>
                                <option value="4">alatca</option>
                            </select>
                            <label for="input-address" class="element-label">Address:</label>
                            <input type="text" name="address" id="input-address" class="element-input">
                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Details
                        </div>
                        <div id="details" class="content">
                            <label for="rooms" class="element-label">Rooms:</label>
                            <select name="rooms" id="rooms" class="element-select">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <select name="rooms" id="rooms2" class="element-select2">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <label for="Floors" class="element-label">Floors:</label>
                            <select name="Floors" id="Floors" class="element-select">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <select name="Floors2" id="Floors2" class="element-select2">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <label for="Bathrooms" class="element-label">Bathrooms:</label>
                            <select name="Bathrooms" id="Bathrooms" class="element-select">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <select name="Bathrooms2" id="Bathrooms2" class="element-select2">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <label for="Bedrooms" class="element-label">Bedrooms:</label>
                            <select name="Bedrooms" id="Bedrooms" class="element-select">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <select name="Bedrooms2" id="Bedrooms2" class="element-select2">
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                            <label for="min" class="element-label">Square meter (m2)</label>
                            <input type="text" id="min" name="min" placeholder="Min" class="square">
                            <span>-</span>
                            <input type="text" id="max" name="max" placeholder="Max" class="square">
                            <label for="size" class="element-label">Lot size (sqmt)</label>
                            <input type="text" id="size" name="size" placeholder="Min" class="square">
                            <span>-</span>
                            <input type="text" id="max-size" name="max-size" placeholder="Max" class="square">
                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Other
                        </div>
                        <div id="other" class="content">
                            <label for="keyword" class="element-label">Keyword:</label>
                            <input type="text" name="keyword" id="keyword">
                            <label for="featured" class="element-label">Featured:</label>
                            <input type="checkbox" id="featured" name="featured">
                            <label for="sold" class="element-label">Sold:</label>
                            <input type="checkbox" id="sold" name="sold">

                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Facts
                        </div>
                        <div id="facts" class="content">
                            <label for="mls" class="element-label">MLS#:</label>
                            <select name="mls" id="mls" class="element-select">
                                <option value="1">LIKE</option>
                                <option value="2">NOT LIKE</option>
                                <option value="3">LINK %..%</option>
                                <option value="4">IN (..)</option>
                                <option value="5">NOT IN (..)</option>
                            </select>
                            <input type="text" id="input-mls" name="input-mls">
                            <label for="cooling" class="element-label">Cooling:</label>
                            <select name="cooling" id="cooling" class="element-select">
                                <option value="1">Any</option>
                                <option value="2">Center</option>
                                <option value="3">Other</option>
                            </select>
                            <label for="lot" class="element-label">Lot:</label>
                            <select name="lot" id="lot" class="element-lot">
                                <option value="1">=</option>
                                <option value="2">&lt;=</option>
                                <option value="3">&lt;=</option>
                                <option value="4">&gt;=</option>
                                <option value="5">&gt;=</option>
                                <option value="6">!=</option>
                            </select>
                            <input type="text" name="lot-size" id="lot-size" class="element-lot">
                            <label for="heating" class="element-label">Heating:</label>
                            <select name="heating" id="heating" class="element-select">
                                <option value="1">Any</option>
                                <option value="2">Center</option>
                                <option value="3">Other</option>
                            </select>
                            <label for="build-in" class="element-label">Build in:</label>
                            <select name="build-in" id="build-in" class="element-lot">
                                <option value="1">=</option>
                                <option value="2">&lt;=</option>
                                <option value="3">&lt;=</option>
                                <option value="4">&gt;=</option>
                                <option value="5">&gt;=</option>
                                <option value="6">!=</option>
                            </select>
                            <input type="text" name="build-in-size" id="build-in-size" class="element-lot">
                            <label for="single-family" class="element-label">Single Family</label>
                            <input type="checkbox" name="single-family-yes" id="single-family">Yes
                            <input type="checkbox" name="single-family-no" id="single-family-no">No
                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Construction
                        </div>
                        <div id="construction" class="content">
                            <label for="structure-type" class="element-label">Structure Type:</label>
                            <select name="structure-type" id="structure-type" class="element-select">
                                <option value="1">LIKE</option>
                                <option value="2">NOT LIKE</option>
                                <option value="3">LINK %..%</option>
                                <option value="4">IN (..)</option>
                                <option value="5">NOT IN (..)</option>
                            </select>
                            <input type="text" name="input-structure-type" id="input-structure-type">

                            <label for="roof-type" class="element-label">Roof Type:</label>
                            <select name="roof-type" id="roof-type" class="element-select">
                                <option value="1">LIKE</option>
                                <option value="2">NOT LIKE</option>
                                <option value="3">LINK %..%</option>
                                <option value="4">IN (..)</option>
                                <option value="5">NOT IN (..)</option>
                            </select>
                            <input type="text" name="input-roof-type" id="input-roof-type">

                            <label for="unit-count" class="element-label">Unit Count:</label>
                            <select name="unit-count" id="unit-count" class="element-lot">
                                <option value="1">=</option>
                                <option value="2">&lt;=</option>
                                <option value="3">&lt;=</option>
                                <option value="4">&gt;=</option>
                                <option value="5">&gt;=</option>
                                <option value="6">!=</option>
                            </select>
                            <input type="text" name="unit-count-size" id="unit-count-size" class="element-lot">

                            <label for="room-count" class="element-label">Room Count:</label>
                            <select name="room-count" id="room-count" class="element-lot">
                                <option value="1">=</option>
                                <option value="2">&lt;=</option>
                                <option value="3">&lt;=</option>
                                <option value="4">&gt;=</option>
                                <option value="5">&gt;=</option>
                                <option value="6">!=</option>
                            </select>
                            <input type="text" name="room-count-size" id="room-count-size" class="element-lot">
                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Other info
                        </div>
                        <div id="other-info" class="content">
                            <label for="laundry" class="element-label">Laundry:</label>
                            <select name="laundry" id="laundry" class="element-select">
                                <option value="1">Any</option>
                                <option value="2">Center</option>
                                <option value="3">Other</option>
                            </select>
                            <label for="floor-size" class="element-label">Floor size:</label>
                            <select name="floor-size" id="floor-size" class="element-lot">
                                <option value="1">=</option>
                                <option value="2">&lt;=</option>
                                <option value="3">&lt;=</option>
                                <option value="4">&gt;=</option>
                                <option value="5">&gt;=</option>
                                <option value="6">!=</option>
                            </select>
                            <input type="text" name="floor-size" id="input-floor-size" class="element-lot">

                            <label for="Parcel" class="element-label">Parcel #:</label>
                            <select name="Parcel" id="Parcel" class="element-select">
                                <option value="1">LIKE</option>
                                <option value="2">NOT LIKE</option>
                                <option value="3">LINK %..%</option>
                                <option value="4">IN (..)</option>
                                <option value="5">NOT IN (..)</option>
                            </select>
                            <input type="text" name="input-Parcel" id="input-Parcel">
                        </div>
                        <div class="item">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            Ordering
                        </div>
                        <div id="odering" class="content">
                            <label for="sort-by" class="element-label">Sort by:</label>
                            <select name="sort-by" id="sort-by" class="element-select">
                                <option value="1">Featured</option>
                                <option value="2">Ref</option>
                                <option value="3">Propertype title</option>
                                <option value="4">List date</option>
                                <option value="5">Price</option>
                            </select>
                            <label for="oder-by" class="element-label">Oder by:</label>
                            <select name="oder-by" id="oder-by" class="element-select">
                                <option value="1">Descending</option>
                                <option value="2">Ascending</option>
                            </select>
                        </div>
                        <div class="item">
                            <input type="submit" value="submit" class="form-submit">
                            <p>Advanced search</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>