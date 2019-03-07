<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="mobile">
        <div class="header mb-0">
            <h2 class="mb-0 font-weight-bold">facebook</h2>
        </div>

        <div class="body pt-3 pb-5">
            <div class="middle">
                <div class="form">
                    <form action="/login" method="post">
                        {{csrf_field()}}
                        <div class="">
                            <input type="text" name="email" class="form-control"
                                placeholder="Mobile number or email address"required>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-2"></div>
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </form>
                </div>

                <div class="mb-2 mt-2" style="text-align: center">or</div>
                <button class="btn btn-success">Create New Account</button>
                <div class="mb-3"></div>

                <a href="">Forgotten password? . Help center</a>

            </div>
        </div>

        <div class="footer">
            <div class="footer-links mt-3">
                <div>
                    <a href="">English (UK)</a><br>
                    <a href="">Français (France)</a><br>
                    <a href="">Español</a><br>
                    <a href="">Deutsch</a><br>
                </div>
                <div>
                    <a href="">Hausa</a><br>
                    <a href="">Português (Brasil)</a><br>
                    <a href="">العربية</a><br>
                </div>
            </div>

        </div>
    </div>

    <div class="big">
        <div class="header-big">
            <div class="brand-name">
                <h1 class="font-weight-bolder">facebook</h1>
            </div>
            <div class="login-form">
                <table>
                    <form action="/login" method="post">
                        {{csrf_field()}}
                    <tr>
                        <td><label for="">Email or Phone</label></td>
                        <td><label for="">Password</label></td>
                    </tr>
                    <tr>
                        <td class="pr-3">
                            <input type="text" name="email" id="">
                        </td>
                        <td class="pr-3">
                            <input type="password" name="password" id="">
                        </td>
                        <td>
                            <button class="button" type="submit">Log In</button>
                        </td>
                        </form>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="">Forgotton account?</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="body-big pb-5">
            <div class="image-holder pr-5">
                <h5 class="font-weight-bold">Facebook helps you connect and share with the <br> people in your life</h5>

                <img src="img/fb.png" alt="">
            </div>
            <div class="reg-form pt-5">
                <h1>Create an account</h1>
                <h5>It's free and always will be</h5>

                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>

                    <h5>Birthday</h5>
                    <div class="mb-3"><select aria-label="Day" name="birthday_day" id="day" title="Day">
                            <option value="0">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28" selected="1">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select><select aria-label="Month" name="birthday_month" id="month" title="Month">
                            <option value="0">Month</option>
                            <option value="1">Jan</option>
                            <option value="2" selected="1">Feb</option>
                            <option value="3">Mar</option>
                            <option value="4">Apr</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aug</option>
                            <option value="9">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                        </select><select aria-label="Year" name="birthday_year" id="year" title="Year">
                            <option value="0">Year</option>
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
                            <option value="1994" selected="1">1994</option>
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
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                            <option value="1922">1922</option>
                            <option value="1921">1921</option>
                            <option value="1920">1920</option>
                            <option value="1919">1919</option>
                            <option value="1918">1918</option>
                            <option value="1917">1917</option>
                            <option value="1916">1916</option>
                            <option value="1915">1915</option>
                            <option value="1914">1914</option>
                            <option value="1913">1913</option>
                            <option value="1912">1912</option>
                            <option value="1911">1911</option>
                            <option value="1910">1910</option>
                            <option value="1909">1909</option>
                            <option value="1908">1908</option>
                            <option value="1907">1907</option>
                            <option value="1906">1906</option>
                            <option value="1905">1905</option>
                        </select><br></div>

                    <input type="radio" name="sex" value="1" id="u_0_9" /><label class="mr-3" for="u_0_9">Female</label></span><span
                        class="_5k_2 _5dba"><input type="radio" name="sex" value="2" id="u_0_a" /><label class="_58mt"
                            for="u_0_a">Male</label>

                        <br><button class="btn btn-success">Sign Up</button>
                </form>

                <div id="reg_pages_msg" class="mt-4"><a href="/pages/create/?ref_type=registration_form">Create a Page</a>
                    for a
                    celebrity, band or business.</div>
            </div>
        </div>
    </div>
</body>

</html>