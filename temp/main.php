<?php

// Simple Banking System in PHP

$balance = 0;

while (true) {

    echo "\n===== BANK MENU =====\n";
    echo "1. Create Account\n";
    echo "2. Deposit Money\n";
    echo "3. Withdraw Money\n";
    echo "4. Check Balance\n";
    echo "5. Exit\n";

    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {

        case 1:
            echo "\nEnter your name: ";
            $name = trim(fgets(STDIN));

            echo "Enter initial deposit: ";
            $balance = trim(fgets(STDIN));

            echo "Account created successfully for $name\n";
            echo "Current Balance: $balance\n";
            break;

        case 2:
            echo "\nEnter deposit amount: ";
            $deposit = trim(fgets(STDIN));

            if ($deposit > 0) {
                $balance = $balance + $deposit;
                echo "Money deposited successfully!\n";
                echo "New Balance: $balance\n";
            } else {
                echo "Invalid amount\n";
            }
            break;

        case 3:
            echo "\nEnter withdraw amount: ";
            $withdraw = trim(fgets(STDIN));

            if ($withdraw > $balance) {
                echo "Insufficient balance!\n";
            } else {
                $balance = $balance - $withdraw;
                echo "Withdrawal successful\n";
                echo "Remaining Balance: $balance\n";
            }
            break;

        case 4:
            echo "\nYour current balance is: $balance\n";
            break;

        case 5:
            echo "\nThank you for using the banking system!\n";
            exit;

        default:
            echo "\nInvalid choice. Try again.\n";
    }
}

?>
