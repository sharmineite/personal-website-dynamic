<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'snippets/head.php'; ?>
</head>
<body class="home">
    
    <?php include_once 'snippets/header.php'; ?>

    <main class="container">
        <section class="main-container">
            <form method="POST" action="">
                <label for="c_name" class="contact-form__label">Name</label>
                <input type="text" required placeholder="Name" name="c_name" id="c_name" class="contact-form__input" autofocus>

                <label for="c_email" class="contact-form__label">Email</label>
                <input type="email" required placeholder="Email" name="c_email" id="c_email" class="contact-form__input">

                <label for="c_phone" class="contact-form__label">Phone</label>
                <input type="tel" required placeholder="Phone" name="c_phone" id="c_phone" class="contact-form__input">

                <label for="c_ds" class="contact-form__label">Desired Service</label>
                <select name="c_ds" id="c_ds" class="contact-form__select">
                    <option value="Web Development">Web Development</option>
                    <option value="Project Management">Project Management</option>
                    <option value="Virtual Assistance">Virtual Assistance</option>
                </select>

                <label for="c_message" class="contact-form__label">Message</label>
                <textarea name="c_message" placeholder="Message" id="c_message" class="contact-form__textarea"></textarea>

                <button type="submit" class="contact-form__submit">Send Message</button>
            </form>
        </section>
    </main>

</body>
</html>