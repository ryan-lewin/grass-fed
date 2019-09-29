@extends('layouts.app')

@section('content')
    <div style="margin: 0 5rem;">
        <h1 style="margin-bottom: 2rem;">Project Documentation</h1>
        <div>
            <h3>Peer Review Reflection</h3>
            <p>
                I honestly found it quite difficult to conduct peer reviews for numerous reasons. It's a difficult thing to sit down with another student and critique their work, but it has made me more critical of my own work. I believe this is due to my need to prove myself before judging someone else. Mr pride won't allow me to show someone something that I've not put all of my effort into which has led to what I feel is better work on mine and my peers part. Throughout the peer review process, I've met several new people and have tried to conduct reviews with people of not reviewed before. This has allowed me to view a wide range of work, learning different methods for how people have tackled various problems. I've since been able to implement some of these things into my own projects. My process when conducting a peer review has evolved throughout the course of the semester. Initially I was going through the motions and essentially searching for boxes to tick. Currently I search for ways that requirements have been implemented differently to mine. Whether I use these methods or not, i feel, doesn't really matter. It's teaching me a lot about how other people write code and how they think about problems. This will be beneficial in the future when I’m expected to work with others on shared codebases. I believe the peer review process was a positive one and has helped me in my studies. If nothing else, it makes what is ordinarily a solitary activity (coding) and makes it somewhat of a group task.
            </p>
            <hr>
        </div>
        <div>
            <h3>ERD</h3>
            <img src="{{ asset('images/2703A2.jpg') }}" alt="">
            <hr>
        </div>
        <div>
            <h3>Project Status</h3>
            <p>
                I was able to complete all tasks except making the dish name unique only for that restaurant, not across restaurants. I simply overlooked this requirement and by the time I realised it was too late to implement.
            </p>
            <p>
                The project was really a lot of fun and I've learned a lot about Laravel. I didn’t have too much trouble with the requirements but have been able to identify areas I would like to learn more in depth. On the of these areas is models. I am extremely interested in learning more about how to make them work well in my projects, but due to time constraints I've had to do what I can with this project.
            </p>
            <ul>
                <li><strike> Users can register with this website. When registering, users must provide their name, email,
                        password, and address. Furthermore, users must register as either a restaurant or customer</strike></li>
                <li><strike>Registered users can login. Users should be able to login (or get to the login page) from any
                        page. A logged in user should be able to log out. </strike></li>
                <li><strike>Only the restaurant users can add dishes to the list of dishes sold by his/her restaurant. They
                        can also update and delete existing dishes. A dish must have a name and a price. A dish name
                        must be unique. A price must be a positive value.</strike></li>
                <li><strike>All users (including guests) can see a list of registered restaurants. They can click into any
                        restaurant to see the dishes this restaurant sells.</strike></li>
                <li><strike>The list of dishes should be paginated with at most 5 dishes per page</strike></li>
                <li><strike>(Single purchase) Only consumers can purchase a dish. Since we do not deal with payment
                        gateways in this course, when user clicks on purchase, we simply assume the payment is
                        successful, and save the purchase order in the database. Then it will display the dish
                        purchased, the price, and the delivery address (which is the consumer’s address) to let the user
                        know that the purchase is successful.</strike></li>
                <li><strike>A restaurant (user) can see a list of orders customers have placed on his/her restaurant. An
                        order should consist of the name of the consumer, that dish (name) that was ordered, and the
                        date that the order was placed.</strike></li>
                <li><strike>After user registration, login, or logout, appropriate redirections should be provided. E.g. if
                        user logs in from the details page, then after user logs in, s/he should be redirected back to that
                        page.</strike></li>
                <li>When restaurant users add a new dish, the dish name must be unique for that restaurant, not
                        across restaurants. This is an extension of requirement 3.</strike></li>
                <li><strike>When restaurant users add a dish, s/he can upload a photo for that dish. This photo will be
                        displayed when this dish displayed.</li>
                <li><strike>In addition to requirement 6 (single purchase), consumers can add multiple dishes to a cart,
                        see the contents in the cart, the cost of this cart (the sum of all dishes), remove any unwanted
                        dishes, before purchasing these dishes. Once purchased, the cart will be emptied.</strike></li>
                <li><strike>There is a page which lists the top 5 most popular (most ordered) dishes in the last 30 days.</strike></li>
                <li><strike>Restaurants can view a statistic page which shows the sales statics for that restaurant. This
                        page shows: The total amount of sales (in dollar value) made by this restaurant and The weekly sales total (in dollar value) for the last 12 weeks, i.e. there should be a sales
                        total for each of the last 12 weeks.</strike></li>
                <li><strike>There is another user type called administrator. There is only 1 administrator which is
                        created through seeder. The purpose of administrator is to approve new restaurant (users).
                        After a new restaurant user (account) is registered, s/he cannot add/remove dishes from
                        his/her restaurant until this account is approved by the administrator. There is a page where
                        the administrator can go to see a list of new restaurant accounts that require approval, and to
                        approve these accounts.</strike></li>
            </ul>
        </div>
    </div>
@endsection