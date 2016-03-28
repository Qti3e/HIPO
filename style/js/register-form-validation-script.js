/*****************************************************************************
 *         In the name of God the Most Beneficent the Most Merciful          *
 *___________________________________________________________________________*
 *   This program is free software: you can redistribute it and/or modify    *
 *   it under the terms of the GNU General Public License as published by    *
 *   the Free Software Foundation, either version 3 of the License, or       *
 *   (at your option) any later version.                                     *
 *___________________________________________________________________________*
 *   This program is distributed in the hope that it will be useful,         *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *   GNU General Public License for more details.                            *
 *___________________________________________________________________________*
 *   You should have received a copy of the GNU General Public License       *
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *___________________________________________________________________________*
 *                       Created by AliReza Ghadimi                          *
 *     <http://AliRezaGhadimi.ir>    LO-VE    <AliRezaGhadimy@Gmail.com>     *
 *****************************************************************************/
var Script = function () {

    $.validator.setDefaults({
        submitHandler: submitHandler
    });

    $().ready(function() {
        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                age: {
                    required: true,
                    number:true,
                    min:10,
                    max:70
                },
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                agree: "required"
            },
            messages: {
                firstname: "لطفا نام خود را وارد نمایید",
                lastname: "لطفا نام خانوادگی خود را وارد نمایید",
                age: {
                    required: "سن خود را وارد نمایید",
                    number: "سن باید عدد باشد",
                    min:"سن نا معتبر است",
                    max:"سن نامعتبر است"
                },
                username: {
                    required: "یک نام کاربری انتخاب کنید",
                    minlength: "نام کاربری حداقل باید ۲ کاراکتر باشد"
                },
                password: {
                    required: "رمز عبور الزامی است",
                    minlength: "رمز عبور حداقل باید دارای ۵ کاراکتر باشد"
                },
                confirm_password: {
                    required: "تکرار رمز عبور الزامی می باشد",
                    minlength: "رمز عبور حداقل باید دارای ۵ کاراکتر باشد",
                    equalTo: "رمز عبور و تکرار آن باید یکی باشند"
                },
                email: "یک ایمیل معتبر وارد کنید",
                agree: "پذیرش قوانین عضویت ضروری است"
            }
        });
    });


}();