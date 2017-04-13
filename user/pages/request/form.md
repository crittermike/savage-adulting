---
title: Yay! Another idiotic request!
form:
    name: contact-form
    fields:
        - name: name
          label: Sigh, what's your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Enter your stupid email address
          type: email
          validate:
            required: true

        - name: request
          label: Now type the idiotic topic you have in mind
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Just click the button already

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your request! I'll be sure to throw it away immediately!

---

I can't wait to see what riveting topic you think I'm going to waste my time on.