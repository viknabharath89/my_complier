# Linear Search in Ruby
# This program searches for a target element in an array using linear search.

def linear_search(array, target)
  # Validate inputs
  unless array.is_a?(Array)
    raise ArgumentError, "First argument must be an array."
  end

  # Iterate through the array to find the target
  array.each_with_index do |element, index|
    return index if element == target
  end

  # Return -1 if not found
  -1
end

# Main program
begin
  # Get array input from user
  print "Enter elements of the array separated by spaces: "
  array = gets.chomp.split.map do |item|
    # Try to convert to integer if possible, else keep as string
    Integer(item) rescue item
  end

  # Get target value
  print "Enter the value to search: "
  target_input = gets.chomp
  target = Integer(target_input) rescue target_input

  # Perform search
  index = linear_search(array, target)

  # Display result
  if index != -1
    puts "Element '#{target}' found at index #{index}."
  else
    puts "Element '#{target}' not found in the array."
  end

rescue ArgumentError => e
  puts "Error: #{e.message}"
rescue => e
  puts "An unexpected error occurred: #{e.message}"
end
