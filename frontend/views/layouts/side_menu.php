<?php 

$ADMIN_MENU = [
    "items" => [
        ["label" => "Dashboard", "url" => "/crm/frontend/web/", "icon" => "home"],
        [
            "label" => "Master",
            "url" => "#",
            "icon" => "table",
            "items" => [
               ["label" => "BulkUpload","url" => "index.php?r=csv-trackers"],
                ["label" => "Assign Course/Student","url" => "index.php?r=course-users"],
                // ["label" => "New Leads","url" => "/crm/frontend/web/index.php?r=leads"],
                // ["label" => "Allocate Leads","url" => "/crm/frontend/web/index.php?r=disposition"],
               // ["label" => "Agents","url" => "/"],
                // ["label" => "Agents",
                //     "url" => "#",
                //     "items" => [
                //         ["label" => "Sing Up","url" => "/crm/frontend/web/index.php?r=site/signup",],
                //         ["label" => "Remove Agent","url" => "/",],
                //     ],
                // ],
               // ["label" => "Manage Learn Booking","url" => "/amex"],
               

              

              
               // ["label" => "View Golf Courses","url" => "/amex"],
                                                          
            ],
        ],

        ["label" => "Course",
        "url" => "#",
        "items" => [
            ["label" => "Course Create","url" => "index.php?r=courses/create"],
            ["label" => "Course List","url" => "index.php?r=courses"],
            // ["label" => "Sales Reports","url" => "/amex"],
        ],
    ],
    
        ["label" => "Student",
        "url" => "#",
        "items" => [
            ["label" => "Add Student","url" => "index.php?r=user/create"],
            ["label" => "Student List","url" => "index.php?r=user"],
            // ["label" => "Sales Reports","url" => "/amex"],
        ],
    ],
        ["label" => "Services",
        "url" => "#",
        "items" => [
            ["label" => "Videos","url" => "#"],
            ["label" => "Library","url" => "#"],
            ["label" => "Tests","url" => "#"],
            ["label" => "MCQs","url" => "#"],
        ],
        ],
        ["label" => "Payments", "url" => "#", "icon" => "home"],
        ["label" => "MainsQuestions", "url" => "index.php?r=mains-questions", "icon" => "home"],

        

        [
            "label" => "Exam",
            "url" => "#",
            "icon" => "table",
            "items" => [
               ["label" => "Submit Exam","url" => "index.php?r=exams/create"],
               ["label" => "Attempts List","url" => "index.php?r=exams"],
               
                                                          
            ],
        ],

        [
        "label" => "Test Series List",
        "url" => "index.php?r=test-series",
        "icon" => "table",
        // "items" => [
        //    ["label" => "Test","url" => "index.php?r=test-series"],
        // //    ["label" => "Attempts List","url" => "index.php?r=exams"],
        // ],
    ],

      /*  [
            "label" => "ENBD",
            "url" => "#",
            "icon" => "table",
            "items" => [
                ["label" => "Users","url" => "/enbd/web-user-master"],
                // ["label" => "web-user-cards","url" => "/enbd/web-user-cards",],
                // ["label" => "four-ball-master","url" => "/enbd/four-ball-master",],
                // ["label" => "golf-course-master","url" => "/enbd/golf-course-master"],
                // ["label" => "comp-golf-course-book","url" => "/enbd/comp-golf-course-book"],
                // ["label" => "golfcourse-max-book","url" => "/enbd/golfcourse-max-book",],
                // ["label" => "no-show-penality","url" => "/enbd/no-show-penality"],
                
                // ["label" => "Master",
                //     "url" => "#",
                //     "items" => [["label" => "country-list","url" => "/enbd/country-list",],
                //         ["label" => "one-time-password","url" => "/enbd/one-time-password",],
                //         ["label" => "user-password-reset","url" => "/enbd/user-password-reset",],
                //         ["label" => "paypal-log","url" => "/enbd/paypal-log",],
                //         ["label" => "week-day-bin-numbers","url" => "/enbd/week-day-bin-numbers",],
                //         ["label" => "convert-currency","url" => "/enbd/convert-currency",],                         
                //     ],
                // ],
            ],
        ], */
     /*   [
            "label" => "SCBUAE",
            "url" => "#",
            "icon" => "table",
            "items" => [
                ["label" => "Users","url" => "/scbuae/golfer"],
                ["label" => "Activity Logs","url" => "/scbuae/customer-care-executive-activity-log"],
                //["label" => "booking","url" => "/scbuae/booking"],
                //["label" => "customer-care-executive","url" => "/scbuae/customer-care-executive"],
                // ["label" => "golf-course","url" => "/scbuae/golf-course"],
               
                //["label" => "guest-payment","url" => "/scbuae/guest-payment"],
                //["label" => "tee-time","url" => "/scbuae/tee-time"],
                // ["label" => "Master",
                //     "url" => "#",
                //     "items" => [["label" => "account-type","url" => "/scbuae/account-type"],
                //         ["label" => "booking-status","url" => "/scbuae/booking-status"],
                //         ["label" => "guest-payment-status","url" => "/scbuae/guest-payment-status"],
                //     ],
                // ],
            ],
        ], */
    ],
]
;

$USER_MENU = [
    "items" => [
        ["label" => "Dashboard", "url" => "/", "icon" => "home"],
        ["label" => "Customer", "url" => "index.php?r=customer", "icon" => "home"],
        ["label" => "Booking", "url" => "index.php?r=booking", "icon" => "home"],

        ["label" => "Flight",
        "url" => "#",
        "items" => [
           
            ["label" => "Flight List","url" => "index.php?r=flight"],
           
        ],
    ],
    
        [
            "label" => "Time Slots",
            "url" => "#",
            "icon" => "table",
            "items" => [
               ["label" => "Time-Slots","url" => "index.php?r=time-slots"],
            ],
        ],

     
    ],
]
;

$DISPLAY = [];

$userName = isset(\Yii::$app->user->identity->username) ? \Yii::$app->user->identity->username : 'GUEST';
try{
    if(in_array($userName, \common\models\User::ADMIN)){
        $DISPLAY = $ADMIN_MENU;
    } else if($userName == 'GUEST'){
        $DISPLAY = [];
    } else {
        $DISPLAY = $USER_MENU;
    }
} catch (exception $e){

}
// echo "222<pre>";
// print_r(\Yii::$app->user->identity);
// exit;
// $app->user->identity
$DISPLAY = $USER_MENU;

?>

<?=
//isset(Yii::$app->user->identity->username)?
                        \yiister\gentelella\widgets\Menu::widget($DISPLAY)
//: ""
?>