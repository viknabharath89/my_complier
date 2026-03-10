use std::io;

/// Performs a linear search on a slice of integers.
/// Returns `Some(index)` if found, otherwise `None`.
fn linear_search(arr: &[i32], target: i32) -> Option<usize> {
    for (index, &value) in arr.iter().enumerate() {
        if value == target {
            return Some(index);
        }
    }
    None
}

fn main() {
    let mut input = String::new();

    println!("Enter integers separated by spaces:");
    io::stdin()
        .read_line(&mut input)
        .expect("Failed to read input");

    // Parse the input into a vector of integers
    let numbers: Vec<i32> = input
        .split_whitespace()
        .filter_map(|s| s.parse::<i32>().ok())
        .collect();

    if numbers.is_empty() {
        println!("No valid integers entered. Exiting.");
        return;
    }

    input.clear();
    println!("Enter the number to search for:");
    io::stdin()
        .read_line(&mut input)
        .expect("Failed to read input");

    let target: i32 = match input.trim().parse() {
        Ok(num) => num,
        Err(_) => {
            println!("Invalid number entered. Exiting.");
            return;
        }
    };

    // Perform linear search
    match linear_search(&numbers, target) {
        Some(index) => println!("Found {} at position {}.", target, index),
        None => println!("{} not found in the list.", target),
    }
}
