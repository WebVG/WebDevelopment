<%@ Page Language="C#" AutoEventWireup="true" CodeFile="AngularJSArrayTemplate.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>
<html>
<head>
        <title>AngularJS!</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; }
        .input { line-height: 1.2em; }
        .display { text-transform: uppercase; }
        .header { font-weight: bold; }
        .costLabel { float: left;  width: 140px; }
        .costValue {  float: left; width: 60px; text-align: right; }
    </style>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body>
    
<div ng-app="shippingApp" ng-controller="shippingCtrl">
        <p class="header">Please enter your mailing address:</p>
        <p class="input">
            First Name<br /><input type="text" ng-model="first" placeholder="First Name"><br />
            Last Name<br /><input type="text" ng-model="last" placeholder="Last Name"><br />
            <!-- Added Inputs -->
            Address<br /><input type="text" ng-model="address" placeholder="Street Address" /><br />
            City<br /><input type="text" ng-model="city" placeholder="City" /><br />
            State<br /><input type="text" ng-model="state" placeholder="State" /><br />
            Zip<br /><input type="number" ng-model="zip" placeholder="Zip" /><br />
            <!-- ------------------- -->
        <p class="header">Ship To:</p>
        <p class="display">
            {{first}} {{last}}<br />
            {{address}}<br />
            {{city}}, {{state}} {{zip}}
        </p>

        <p class="header">Cost:</p>
        <p class="display">
            <span class="costLabel">Cost:</span> <span class="costValue">{{cost.toFixed(2)}}</span><br />
            <span class="costLabel">Tax:</span> <span class="costValue">{{(cost * taxRate).toFixed(2)}}</span><br />
            <span class="costLabel">Cost with Tax:</span> <span class="costValue">{{(cost + (cost * taxRate)).toFixed(2)}}</span><br />
            <span class="costLabel">Shipping:</span> <span class="costValue">{{shippingCost.toFixed(2)}}</span><br />
            <span class="costLabel">Total:</span> <span class="costValue">{{(cost + (cost * taxRate) + shippingCost).toFixed(2)}}</span>
            
        </p>
    </div>
    <script>
        var app = angular.module("shippingApp", []);
        app.controller("shippingCtrl", function ($scope) {
            $scope.first = "Misko";
            $scope.last = "Hevery";
            $scope.cost = 129.99;
            $scope.address = "700 Carnegie Ave";
            $scope.city = "Cleveland";
            $scope.state = "OH";
            $scope.zip = 44115;
            $scope.shippingCost = 5.99;
            $scope.taxRate = 0.07;
        });
    </script>
    
</body>
</html>