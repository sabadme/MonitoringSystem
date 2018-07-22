<div class="booking-container">
    <strong class="title">Booking Lounge</strong>

    <div class="booking-wrapper-container">
        <div class="booking-wrapper">
            <strong class="subtitle">Bookings</strong>

            <div class="field">
                <label>Booker: </label>
                <!-- <select>
                    <option value="" disabled selected>Select Booker</option>
                    <option>Name1</option>
                    <option>Name1</option>
                    <option>Name1</option>
                </select> -->
                <input type="text" autocomplete="">
            </div>

            <div class="field">
                <label>Venue: </label>
                <input type="text" name="roomName"/>
            </div>

            <div class="field">
                <label>When: </label>
                <input type="date" name="roomName"/>
            </div>

            <div class="field">
                <label>Start Time: </label>
                <input type="time" name="roomName"/>
            </div>

            <div class="field">
                <label>End Time: </label>
                <input type="time" name="roomName"/>
            </div>

            <div class="field equipments-field">
                <span>Equipments</span>
                <input class="search" type="text" placeholder="search equipments..."/>
                <div class="wrapper">
                    <?php
                    include "admin/connection.php";

                    $equipment_sql = mysql_query("SELECT * FROM equipment ORDER BY id desc");
                    while ($data_equipment = mysql_fetch_array($equipment_sql)) {
                        ?>
                        <div>
                            <input type="checkbox" id="<?php echo $data_equipment['id']; ?>"/>
                            <label for="<?php echo $data_equipment['id']; ?>"><?php echo $data_equipment['equipment_name']; ?></label>
                        </div>

                        <?php
                    }

                    ?>
                </div>
            </div>

            <form action="" method="POST">
                <button type="submit" name="save_booking">Book</button>
            </form>
        </div>
        <div class="booking-table">
            <strong class="subtitle">Booking Information</strong>
            <div class="table-container" id="wrapper">
                <table>
                    <thead>
                    <th>Room</th>
                    <th>Equipments</th>
                    <th>Status</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                    <tr>
                        <td>MC-501</td>
                        <td>
                            <select>
                                <option>AC-101</option>
                                <option>AC-101</option>
                                <option>AC-101</option>
                                <option>AC-101</option>
                            </select>
                        </td>
                        <td>Up to Date</td>
                        <td>
                            <select>
                                <option value="" disabled selected>Select..</option>
                                <option>Broken</option>
                                <option>Up to Date</option>
                                <option>Expired</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>