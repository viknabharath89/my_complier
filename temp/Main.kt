import java.util.Scanner

// Function to perform linear search
fun linearSearch(arr: IntArray, target: Int): Int {
    for (index in arr.indices) {
        if (arr[index] == target) {
            return index // Return the index where the element is found
        }
    }
    return -1 // Return -1 if the element is not found
}

fun main() {
    val scanner = Scanner(System.`in`)

    try {
        // Read array size
        print("Enter the number of elements in the array: ")
        val size = scanner.nextInt()
        if (size <= 0) {
            println("Array size must be greater than zero.")
            return
        }

        // Read array elements
        val arr = IntArray(size)
        println("Enter $size integers:")
        for (i in 0 until size) {
            arr[i] = scanner.nextInt()
        }

        // Read target element
        print("Enter the element to search: ")
        val target = scanner.nextInt()

        // Perform linear search
        val resultIndex = linearSearch(arr, target)

        // Display result
        if (resultIndex != -1) {
            println("Element $target found at index $resultIndex (position ${resultIndex + 1}).")
        } else {
            println("Element $target not found in the array.")
        }

    } catch (e: Exception) {
        println("Invalid input. Please enter integers only.")
    }
}
