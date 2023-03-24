<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> PMO </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style>





</head>

<body>

    <div class="container-fluid  ">
        <div class="row justify-content-md-center">
            <div class="col-md-9 ">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-danger text-center mt-3 mb-4">Be One of Our PMO Community</h1>

                    <div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0    border ml-2 ">Specialization</label>
                        <label class="nav-link shadow-sm step1   border ml-2 ">Category</label>
                        <label class="nav-link shadow-sm step2   border ml-2 ">Company Info</label>
                        <label class="nav-link shadow-sm step3   border ml-2 ">Employee Info</label>
                        <label class="nav-link shadow-sm step4   border ml-2 ">Login Info</label>
                    </div>

                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        {{-- spcial info --}}
                        <div class="form-section">
                            <label for="">We Are Company Specialized At:</label>
                            <br>
                            @foreach ($specials as $special)
                                <input type="radio" id="{{ $special->id }}" required name="spcial" value="1"
                                    checked onclick="getCategories(id)" />
                                <label for="Real">{{ $special->name }}</label>
                                <br>
                            @endforeach
                            {{-- <input type="radio" id="Design" required name="spcial" value="2" />
                            <label for="Design">Design</label>
                            <br> --}}
                            {{--
                            <input type="radio" id="Contractor" required name="spcial" value="4" />
                            <label for="Contractor">Contractor</label>
                            <br>

                            <input type="radio" id="Material" required name="spcial" value="3" />
                            <label for="Material">Material Supplier</label>
                            <br> --}}
                        </div>

                        {{-- category info --}}
                        <div class="form-section">
                            <div id="categories_inputs" class="">
                                {{-- <input type="checkbox" name="sub_cate_16" value="16">
                                <label for="">Earth works </label>
                                <br>
                                <input type="checkbox" name="sub_cate_17" value="17">
                                <label for="">Structural &amp; Civil Works</label>
                                <br>
                                <input type="checkbox" name="sub_cate_18" value="18">
                                <label for="">Mechanical Works</label>
                                <br>
                                <input type="checkbox" name="sub_cate_26" value="26">
                                <label for="">Electrical Works</label>
                                <br>
                                <input type="checkbox" name="sub_cate_36" value="36">
                                <label for="">Finishing Works</label>
                                <br> --}}
                            </div>
                        </div>

                        {{-- company info --}}
                        <div class="form-section">
                            <div id="example-basic">

                                <div class="form-group">
                                    <label for="Company Name">Company Name<span class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" name="comp_name" id="Company Name"
                                        value="" required="" fdprocessedid="2ltho">

                                    <label for="Company Address">Company Address:</label>
                                    <input type="text" class="form-control" name="comp_address" id="Company Address"
                                        value=" " fdprocessedid="dc2onv">

                                </div>

                                <div class="form-group">
                                    <label for="Phone Number">Phone Number<span class="text-danger">*</span>:</label>
                                    <input type="tel" class="form-control" name="comp_phone" id="Phone Number"
                                        value=" " required="" fdprocessedid="f704c6">

                                    <label for="Mobile Number">Mobile Number<span class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" name="comp_mobile" id="Mobile Number"
                                        value=" " required="" fdprocessedid="t8cro4">

                                </div>


                                <div class="form-group">
                                    <label for="Established Since">Established Since<span
                                            class="text-danger">*</span>:</label>

                                    <select class="form-control" name="comp_established" id="Established" required=""
                                        fdprocessedid="p86cue">
                                        <option selected="" value="null">Select Year</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011" selected="">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                    </select>
                                    <label for="Company website">Company website:</label>
                                    <input type="text" class="form-control" name="comp_website"
                                        id="Company website" value=" " fdprocessedid="uq4u44w">
                                </div>

                                <div class="form-group">
                                    <label for="Company Capital">Company Location<span
                                            class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" name="comp_location"
                                        id="Company Capital" value=" " required="" fdprocessedid="20009g">

                                    <label for="Number of Employees">Number of Employees<span
                                            class="text-danger">*</span>:</label>
                                    <input type="number" min="1" class="form-control"
                                        name="comp_number_of_emp" id="Number of Employees" value=""
                                        required="" fdprocessedid="743ihr">
                                </div>

                                <div class="form-group">
                                    <label for="profile">Company Profile<span class="text-danger">*</span>:</label>
                                    <textarea cols="73" rows="10" class="form-control" name="comp_profile" id="profile" required=""> </textarea>
                                </div>

                                <div class="form-group">
                                    <small class="text-info"></small>
                                    <label for="customFile1">Choose Logo</label>
                                    <input class="form-control" type="file" name="comp_logo" id="Company Logo">
                                </div>


                            </div>

                        </div>

                        {{-- empolyee info --}}

                        <div class="form-section">
                            <div class="card-body">
                                <h5 class="card-title text-center text-capitalize">Employee Info</h5>

                                <div id="example-basic">

                                    <div class="form-group">
                                        <label for="Employee Name">Employee Name<span
                                                class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control" name="emp_name"
                                            id="Employee Name" required="" value="">

                                        <label for="Mobile Number">Employee Title </label>
                                        <select class="form-control" name="emp_title" id="title" required=""
                                            onchange="document.getElementById('text_content').value=this.options[this.selectedIndex].text">
                                            <option value="1" selected="">Tender Manager</option>
                                        </select>
                                        <input type="hidden" name="title" id="text_content"
                                            value="Tender Manager">

                                    </div>

                                    <div class="form-group">
                                        <label for="Email Address">Email Address<span
                                                class="text-danger">*</span>:</label>
                                        <input type="email" class="form-control" name="emp_email"
                                            id="Email Address" required="" value="">


                                        <label for="Mobile Number">Mobile Number<span
                                                class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control" name="mobile" id="Mobile Number"
                                            required="" value="">

                                    </div>


                                    <div class="form-group">
                                        <label for="Employee Since">Employee Since<span
                                                class="text-danger">*</span>:</label>
                                        <select class="form-control" name="emp_since" id="Employee Since"
                                            required="">
                                            <option selected="" value="null">Select Year</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- login info --}}
                        <div class="form-section">

                            <div class="form-group">
                                <label class="mr-2" for="user_name">User Name<span
                                        class="text-danger">*</span>:</label>
                                <input type="text" class="form-control" name="user_name" id="user_name"
                                    required="">
                            </div>

                            <div class="form-group">
                                <label class="mr-2" for="password">Password<span
                                        class="text-danger">*</span>:</label>
                                <input type="password" class="form-control" name="pass" id="password"
                                    required="">
                            </div>

                            <div class="form-group">
                                <label class="mr-2" for="re password">Confirm Password<span
                                        class="text-danger">*</span>:</label>
                                <input type="password" class="form-control" name="re_pass" id="re password"
                                    required="">
                            </div>



                        </div>
                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-primary float-left">&lt;
                                Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>




    <script>
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {

                $sections.removeClass('current').eq(index).addClass('current');

                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);


                const step = document.querySelector('.step' + index);
                step.style.backgroundColor = "#17a2b8";
                step.style.color = "white";



            }

            function curIndex() {

                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });

            $('.form-navigation .next').click(function() {
                $('.employee-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });

            });

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });


            navigateTo(0);



        });
    </script>


    <script>
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function getCategories(id) {
            console.log(id);
            // let category_id=document.getElementById('category_id').value;
            let categories_inputs = document.getElementById('categories_inputs');

            // console.log(attributes_input);
            categories_inputs.innerHTML = '';
            fetch('/spcial/categories/' + id)
                .then(data => {
                    return data.json();
                })
                .then(data => {
                    data.forEach(category => {

                        console.log(category);
                        categories_inputs.innerHTML += ` <input type="checkbox" name="category[]" value="${category.id}">
                                <label for="">${category.name}</label>
                                <br>`
                    });
                });
        }
    </script>
</body>

</html>
