# HNG Stage One Task - Backend Track
Task Description
This project is a basic API server created as part of the HNG Backend Track Stage One task. The server utilizes PHP to fetch weather information based on the client's IP address and provides a greeting message with temperature details. The weather data is fetched from the WeatherAPI.com service.

# Project Structure
The project consists of the following components:

hello.php: Contains PHP  methods to handle API requests.
.htaccess: Apache configuration file for URL rewriting.
README.md: Project documentation summarizing its functionality.
API Endpoint
GET /api/hello

# Parameters
visitor_name: (optional) Visitor's name for personalized greeting.
Example Usage
GET http://elite-hng.infinityfreeapp.com/api/hello?visitor_name="Elite"

# Response
The API endpoint returns a JSON object with the following structure: { "client_ip": "127.0.0.1", "location": "New York", "greeting": "Hello, Elite!, the temperature is 11 degrees Celsius in New York" }

# Usage
Deploying: Upload the project files to a web server.
Accessing: Make GET requests to the /api/hello endpoint with optional visitor_name parameter.
Dependencies
WeatherAPI.com: Used to fetch current weather data based on client IP address.
Notes
Ensure proper handling of visitor inputs and API responses for robust functionality.
Secure sensitive information such as API keys and ensure they are stored securely or fetched from environment variables.


# link to the live website
http://elite-hng.infinityfreeapp.com/api/hello?visitor_name="mark"
the name is dynamic
