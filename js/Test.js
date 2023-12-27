function sendDataToLambda() {
    // Sample data to be sent to the Lambda function
    const requestData = {
        UserID: 123,
        SenderName: 'John Doe',
        ReceiverName: 'Jane Doe',
        ShippingType: 'Express',
        WeightKg: 5
    };

    // AJAX request
    $.ajax({
        url: 'YOUR_LAMBDA_API_ENDPOINT', // Replace with your Lambda API Gateway endpoint
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(requestData),
        success: function(response) {
            console.log('Lambda function executed successfully:', response);
            // Handle the Lambda response here
        },
        error: function(error) {
            console.error('Error invoking Lambda function:', error);
            // Handle errors here
        }
    });
}

// Example: Call the function when a button is clicked
$('#invokeLambdaButton').on('click', function() {
    sendDataToLambda();
});