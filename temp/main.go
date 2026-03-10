# Linear Search Program in Ruby

arr = [10, 25, 30, 45, 50]
target = 30
found = false

for i in 0...arr.length
  if arr[i] == target
    puts "Element found at index #{i}"
    found = true
    break
  end
end

if found == false
  puts "Element not found"
end
