@extends('layouts.app')

@section('content')
<style>
body, html {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

form {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    border: 1px solid #343798;
    border-radius: 20px;
    box-shadow: 7px 7px 10px rgba(8, 8, 8, 0.478);
    background-color: #fff;
}

form:hover {
    box-shadow: 10px 10px 15px rgba(19, 19, 20, 0.6);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
    color: #495057;
    font-size: 28px;
    font-style: bold;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #495057;
    font-size: 16px;
}

.radio-group {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

input[type="text"],
input[type="date"],
input[type="number"] {
    width: calc(100% - 16px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: normal; /* Ensure font is not bold */
    transition: border-color 0.3s ease-in-out;
}

input[type="text"]:focus,
input[type="date"]:focus,
input[type="number"]:focus {
    border-color: #007bff;
    outline: none;
}

input[type="date"] {
    width: calc(100% - 16px);
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #092f57;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    display: block;
    margin: 0 auto;
    transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

input[type="submit"]:hover {
    background-color: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.error-message {
    font-size: 12px;
}
</style>
<div class="container">
    <form action="submit.php" method="post">
        <h1><b>Savings  Form</b></h1>
        <!-- Group ID/Name -->
        <label>Group:</label>
        <div class="radio-group">
            <input type="radio" id="group-id-option" name="group-option" value="id" checked>
            <label for="group-id-option">ID</label>
            <input type="radio" id="group-name-option" name="group-option" value="name">
            <label for="group-name-option">Name</label>
        </div>
        <input type="text" id="group-id" name="group-id" placeholder="Enter Group ID" required>
        <span id="group-id-error" class="error-message" style="display: none; color: red;">ID must be a number</span>
        <input type="text" id="group-name" name="group-name" placeholder="Enter Group Name" style="display: none;">
        <span id="group-name-error" class="error-message" style="display: none; color: red;">Name must be in characters</span><br><br>
        
        <!-- Member ID -->
        <label for="member-id">Member ID:</label>
        <input type="text" id="member-id" name="member-id" placeholder="Enter Member ID" required>
        <span id="member-id-error" class="error-message" style="display: none; color: red;">ID must be a number</span><br><br>
        
        <!-- Member Name -->
        <label for="member-name">Member Name:</label>
        <input type="text" id="member-name" name="member-name" placeholder="Enter Member Name" required>
        <span id="member-name-error" class="error-message" style="display: none; color: red;">Name must be in characters</span><br><br>
        
        <!-- Date of deposit -->
        <label for="date-of-deposit">Date of Deposit:</label>
        <input type="date" id="date-of-deposit" name="date-of-deposit" required><br><br>
        
        <!-- Amount -->
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>
        <span id="amount-error" class="error-message" style="display: none; color: red;">Amount Can't Be Negative</span><br><br>
        
        <input type="submit" value="Submit">    
    </form>
</div>

<script>
document.getElementById('group-id-option').addEventListener('change', function() {
    document.getElementById('group-id').style.display = 'block';
    document.getElementById('group-id').setAttribute('type', 'number');
    document.getElementById('group-name').style.display = 'none';
    document.getElementById('group-id-error').style.display = 'none';
    document.getElementById('group-name-error').style.display = 'none';
});
document.getElementById('group-name-option').addEventListener('change', function() {
    document.getElementById('group-id').style.display = 'none';
    document.getElementById('group-name').style.display = 'block';
    document.getElementById('group-id-error').style.display = 'none';
    document.getElementById('group-name-error').style.display = 'none';
});

// Prevent future dates in the date of deposit field
const dateOfDeposit = document.getElementById('date-of-deposit');
const today = new Date().toISOString().split('T')[0];
dateOfDeposit.setAttribute('max', today);

// Validation for Group ID and Name inputs
document.getElementById('group-id').addEventListener('input', function() {
    const value = this.value;
    if (isNaN(value) || /[^0-9]/.test(value)) {
        document.getElementById('group-id-error').style.display = 'block';
    } else {
        document.getElementById('group-id-error').style.display = 'none';
    }
});

document.getElementById('group-name').addEventListener('input', function() {
    const value = this.value;
    if (/[^a-zA-Z]/.test(value)) {
        document.getElementById('group-name-error').style.display = 'block';
    } else {
        document.getElementById('group-name-error').style.display = 'none';
    }
});

// Validation for Member ID and Name inputs
document.getElementById('member-id').addEventListener('input', function() {
    const value = this.value;
    if (isNaN(value) || /[^0-9]/.test(value)) {
        document.getElementById('member-id-error').style.display = 'block';
    } else {
        document.getElementById('member-id-error').style.display = 'none';
    }
});

document.getElementById('member-name').addEventListener('input', function() {
    const value = this.value;
    if (/[^a-zA-Z]/.test(value)) {
        document.getElementById('member-name-error').style.display = 'block';
    } else {
        document.getElementById('member-name-error').style.display = 'none';
    }
});

// Validation for Amount input
document.getElementById('amount').addEventListener('input', function() {
    const value = this.value;
    if (value < 0) {
        this.value = '';
        document.getElementById('amount-error').style.display = 'block';
    } else {
        document.getElementById('amount-error').style.display = 'none';
    }
});
</script>
@endsection
