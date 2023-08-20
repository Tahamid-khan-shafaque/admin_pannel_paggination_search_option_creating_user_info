<style>
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-box {
        width: 400px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-box label {
        display: block;
        margin-bottom: 5px;
    }

    .form-box input,
    .form-box select,
    .form-box textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    .form-box button {
        padding: 10px 20px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>

<div class="form-container">
    <div class="form-box">
        <form action="{{ route('submit-form') }}" method="POST">
            @csrf

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="number">Number:</label>
                <input type="tel" id="number" name="number" required>
            </div>

            <div>
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="HR">HR</option>
                    <option value="Admin">Admin</option>
                    <option value="Development">Development</option>
                </select>
            </div>

            <div>
                <label for="bloodgroup">Blood Group:</label>
                <select id="bloodgroup" name="bloodgroup" required>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <!-- Add more options for other blood groups -->
                </select>
            </div>

            <div style="display: flex; align-items: center;">
            <div><label for="skillset">Gender</label></div>
        <div style="display: flex; align-items: center; margin-right: 20px;">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
        </div>
        <div style="display: flex; align-items: center;">
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
        </div>
    </div>




    
    <div style="display: flex; align-items: center;">
    <div><label for="skillset">Skillset</label></div>
        <div style="display: flex; align-items: center; margin-right: 20px;">
            <input type="radio" id="male" name="skillset" value="male" required>
            <label for="male">HTML</label>
        </div>
        <div style="display: flex; align-items: center;">
            <input type="checkbox" id="female" name="skillset" value="female" required>
            <label for="female">CSS</label>
        </div>
    </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
